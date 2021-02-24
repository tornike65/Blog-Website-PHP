<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
}
