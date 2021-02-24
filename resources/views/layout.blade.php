{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>



    <div class="wrap">
        <header role="banner">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 social">
                            <a href="http://twitter.com/"><span class="fab fa-twitter"></span></a>
                            <a href="http://facebook.com/"><span class="fab fa-facebook"></span></a>
                            <a href="http://instagram.com/"><span class="fab fa-instagram"></span></a>
                            <a href="http://youtube.com/"><span class="fab fa-youtube"></span></a>
                        </div>
                        <div class="col-3 search-top">
                            <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                            <form action="#" class="search-top-form">
                                <span class="icon fa fa-search"></span>
                                <input type="text" id="s" placeholder="Type keyword to search...">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container logo-wrap">
                <div class="row pt-5">
                    <div class="col-12 text-center">
                        <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu"
                            role="button" aria-expanded="false" aria-controls="navbarMenu"><span
                                class="burger-lines"></span></a>
                        <h1 class="site-logo"><a href="/">Wordify</a></h1>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-md  navbar-light bg-light">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mx-auto">
                            @foreach ($menus ?? '' as $menu)                   
                            <li class="nav-item"><a class="nav-link active" href="{{$menu->href}}">{{$menu->title}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- END header -->

        @yield('content')

        <footer class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3>About Us</h3>
                        <p class="mb-4">
                            <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                        </p>

                        <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore
                            reiciendis. <a href="#">Read More</a></p>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="row">
                            <div class="col-md-7">
                                <h3>Latest Post</h3>
                                <div class="post-entry-sidebar">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <img src="images/img_6.jpg" alt="Image placeholder" class="mr-4">
                                                <div class="text">
                                                    <h4>How to Find the Video Games of Your Youth</h4>
                                                    <div class="post-meta">
                                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/img_3.jpg" alt="Image placeholder" class="mr-4">
                                                <div class="text">
                                                    <h4>How to Find the Video Games of Your Youth</h4>
                                                    <div class="post-meta">
                                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/img_4.jpg" alt="Image placeholder" class="mr-4">
                                                <div class="text">
                                                    <h4>How to Find the Video Games of Your Youth</h4>
                                                    <div class="post-meta">
                                                        <span class="mr-2">March 15, 2018 </span> &bullet;
                                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-1"></div>

                            <div class="col-md-4">

                                <div class="mb-5">
                                    <h3>Quick Links</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Adventure</a></li>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">Categories</a></li>
                                    </ul>
                                </div>

                                <div class="mb-5">
                                    <h3>Social</h3>
                                    <ul class="list-unstyled footer-social">
                                        <li><a href="#"><span class="fab fa-twitter"></span> Twitter</a></li>
                                        <li><a href="#"><span class="fab fa-facebook"></span> Facebook</a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span> Instagram</a></li>
                                        <li><a href="#"><span class="fab fa-vimeo"></span> Vimeo</a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span> Youtube</a></li>
                                        <li><a href="#"><span class="fab fa-snapchat"></span> Snapshot</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="small">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; <script data-cfasync="false"
                                src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All Rights Reserved | This template is made with <i
                                class="fa fa-heart text-danger" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
        </footer>
        <!-- END footer -->
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="{{URL::asset('js/search.js')}}"></script>
</body>

</html> --}}