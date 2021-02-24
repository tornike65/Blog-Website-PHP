@extends('layouts.app')
@section('content')
<div class="container py-2">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($sliderposts as $key => $sliderpost)
            <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">


                <a href="/post/{{$sliderpost->slug}}" class="a-block d-flex align-items-center height-lg"
                    style="background-image: url('{{$sliderpost->image}}'); ">
                    <div class="text half-to-full">
                        <span class="category mb-5">{{$sliderpost->category->title}}</span>
                        <div class="sliderpost-meta" style="margin-bottom: 30px; color: #fff">
                            <span class="author"><img style="width: 30px" class="rounded-circle"
                                    src="{{$sliderpost->user->profile_photo}}" alt="Colorlib">
                                Colorlib</span>
                            <span class="mr-2">{{$sliderpost->created_at}}</span>
                            <span><span class="fas fa-comments mr-2"></span>{{$sliderpost->comment->count()}}</span>

                        </div>
                        <h3>{{$sliderpost->title}}</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                </a>

            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Latest Posts</h2>
        </div>
    </div>
    <div class="row blog-entries">
        <div class="col-md-8 main-content">
            <div class="row cards-row">
                @forelse ($posts as $post)
                <div class="col-md-6">
                    <a href="/post/{{$post->slug}}" class="blog-entry ">
                        <img src="{{$post->image}}" alt="Image placeholder">
                        <div class="blog-content-body">
                            <div class="post-meta">
                                <span class="author"><img src="images/person_1.jpg" alt="Colorlib">
                                    {{$post->user->name}}</span>
                                <span class="mr-2">{{$post->created_at}}</span>
                                <span>{{$post->comment->count()}}<span class="ml-2 fa fa-comments"></span></span>
                            </div>
                            <h2>{{$post->title}}</h2>
                        </div>
                    </a>
                </div>
                @empty
                @if (request('title'))
                <p class="text-danger" style="margin: auto">{{request('title')}} - ამ დასახელებით პოსტები არ არსებობს</p>
                @elseif(request('myposts'))
                <p class="text-danger" style="margin: auto">asdas</p>
                @else
                <p class="text-danger" style="margin: auto">{{request('tag')}} -ამ კატეგორიაზე პოსტები არ არსებობს</p>
                @endif
                @endforelse ($posts as $post)
            </div>


            <div class="row mt-5 mb-5" style="margin: auto">
                <div class="col-md-12 pag">                       
                    @if (request('myposts'))
                    {!! $posts->appends(['myposts' => 'myposts'])->render() !!}
                    @else
                    {!! $posts->render() !!}
                    @endif
                </div>
            </div>

        </div>
        <div class="col-md-4 sidebar">
            <div class="sidebar-box search-form-wrap">
                <form action="{{route('post.index',['title'=>request('title')])}}" method="GET" class="search-form">
                    <div class="form-group">
                        <form action="">
                        <input type="text" name="title" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                        <span ><button type="submit" class=" btn icon fa fa-search"></button></span>
                    </form>
                    </div>
                </form>
            </div>


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
                            <a href="{{route('blog.show',['post'=>$toppost->slug])}}" target="_blank">
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
@endsection