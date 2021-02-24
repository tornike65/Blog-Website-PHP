@extends('layouts.app')
@section('content')
<section class="site-section py-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-entries">
                <div class="main-content">
                    <img src="{{ URL::asset($post->image) }}" alt="Image" class="img-fluid mb-5">
                    <div class="post-meta">
                        <span class="author mr-2"><img src="{{URL::asset($post->user->profile_photo)}}" alt=""
                                class="mr-2">
                            {{$post->user->name}}</span>
                        <span class="mr-2">{{$post->created_at}}</span>
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h1 class="mb-4">{{$post->title}}</h1>
                    <div class="pt-5">
                        <p>Categories:
                            <a class="category mb-5"
                                href="{{route('post.index' , ['tag' => $post->category->title]) }}">{{$post->category->title}}</a>
                        </p>
                    </div>

                    <div class="post-content-body">
                        <p>{{$post->body}}</p>
                    </div>


                    <div class="pt-5">
                        <h3 class="mb-5">{{$post->comment->Count()}} Comments</h3>
                        <ul class="comment-list">
                            @foreach ($post->comment as $comment)
                            <li class="comment">
                                <div class="vcard">
                                    <img src="{{ URL::asset($comment->user->profile_photo) }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>{{$comment->author}}</h3>
                                    <div class="meta">{{$comment->created_at}}</div>
                                    <p class="coment-area">{{$comment->comment}}</p>
                                </div>
                            </li>
                            @endforeach


                        </ul>
                        <!-- END comment-list -->
                        @auth
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>

                        <form method="POST" action="http://localhost:8000/post/addComment/{{$post->slug}}">
                            @csrf
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="comment" id="message" cols="20" rows="5"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Add Comment<button>
                            </div>
                        </form>


                        </div>
                        @endauth

                    </div>
                </div>
            </div>

            <div class="col-md-4 sidebar">

                @auth
                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="{{ URL::asset($post->user->profile_photo) }}" alt="Image Placeholder"
                            class="img-fluid">
                        <div class="bio-body">
                            <h2>{{$post->user->name}}</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt
                                repellendus
                                excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                            <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                            <p class="social">
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                @endauth

                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">
                        @foreach ($categories as $category)
                        <li><a href="{{route('post.index' , ['tag' => $category->title]) }}"
                                style="color: black">{{$category->title}}
                                <span>{{$category->post->count()}}</span></a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <h3 class="heading">Popular Posts</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            @foreach ($topposts as $toppost)
                            <li>
                                <a href="{{route('blog.show', ['post'=>$toppost->slug])}}">
                                    <img src="{{ URL::asset($toppost->image) }}" alt="Image placeholder" class="mr-4">
                                    <div class="text">
                                        <h4>{{$toppost->title}}</h4>
                                        <div class="post-meta">
                                            <span class="mr-2">{{$toppost->created_at}}</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->


                <!-- END sidebar-box -->
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-3 ">Related Post</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a href="#" class="a-block sm d-flex align-items-center height-md"
                    style="background-image: url({{ URL::asset($post->image) }}); ">
                    <div class="text">
                        <div class="post-meta">
                            <span class="category">Lifestyle</span>
                            <span class="mr-2">March 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="a-block sm d-flex align-items-center height-md"
                    style="background-image: url({{ URL::asset($post->image) }}); ">
                    <div class="text">
                        <div class="post-meta">
                            <span class="category">Travel</span>
                            <span class="mr-2">March 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="a-block sm d-flex align-items-center height-md"
                    style="background-image: url({{ URL::asset($post->image) }}); ">
                    <div class="text">
                        <div class="post-meta">
                            <span class="category">Food</span>
                            <span class="mr-2">March 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection