<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        if (request('tag')) {
            $posts = Category::where('title', request('tag'))->firstOrfail()->post()->orderByDesc('id')->simplePaginate(4);
        } else if (request('title')) {
            $posts = Post::where('title', 'LIKE', '%' . request('title') . '%')->simplePaginate(4);
            
        } else {
            $posts = Post::orderByDesc('id')->simplePaginate(4);
            // return $posts->links();   
        }
        $topposts = DB::table('posts')->orderByDesc('views')->take(3)->get();
        $menus =  Menu::all();
        $sliderposts = Post::take(3)->get();
        $categories  =  Category::all();
        return view('home', compact('menus', 'posts', 'sliderposts', 'categories', 'topposts'));
    }
    public function create()
    {
        $menus =  Menu::all();
        return view('post.create', compact('menus'));
    }
    private function validatePostRequest()
    {
        return request()->validate([
            'category_id' => 'required',
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
    }
    private function validateCommentRequest()
    {
        return request()->validate([
            'comment' => 'required',
        ]);
    }
    public function store()
    {
        $user = User::First();
        $validate = $this->validatePostRequest();
        $validate['user_id'] = Auth::id();
        $validate['slug'] = Str::slug($validate['title']);
        $validate['short_desc'] = Str::limit($validate['body'],50);
        //return $validate;
        Post::create($validate);
        return redirect('/');
    }
    public function show(Post $post)
    {
        $menus =  Menu::all();
        $categories  =  Category::all();
        $topposts = Category::where('id', $post->category->id)->firstOrfail()->post()->orderByDesc('views')->take(3)->get();
        DB::table('posts')
            ->where('slug', $post->slug)
            ->update(['views' => $post->views + 1]);
        return view('post.show', compact('menus', 'post', 'categories', 'topposts'));
    }
    // public function edit(Post $post)
    // {
    //     $menus =  Menu::all();
    //     //$post = Post::where("slug", $post)->first();
    //     return view('post.edit', compact('menus', 'post'));
    // }
    // public function update(Post $post)
    // {
    //     // return $post;    
    //     $validatereq = $this->validatePostRequest();
    //     $validatereq['slug'] = Str::slug($validatereq['title']);
    //     //return $validatereq;
    //     $post->update($validatereq);
    //     return redirect('/post/' . $post['slug']);
    // }
    // public function destroy($id)
    // {
    //     //
    // }

    public function myPosts(){
        $posts = Post::where('user_id',Auth::id())->simplePaginate(4);
        $topposts = DB::table('posts')->orderByDesc('views')->take(3)->get();
        $menus =  Menu::all();
        $sliderposts = Post::take(3)->get();
        $categories  =  Category::all();
        return view('post.index',compact('menus', 'posts', 'sliderposts', 'categories', 'topposts'));
    }
    
     public function addComment(Post $post){
         //return $post;
         $validateComment = $this->validateCommentRequest();
         $validateComment['user_id'] = Auth::id();
         $validateComment['post_id'] = $post->id;
         Comment::create($validateComment);
         return redirect(url('post',['post'=>$post->slug]));

     }
}
