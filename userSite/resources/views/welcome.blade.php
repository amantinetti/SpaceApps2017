<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="{{ asset('js/skel.min.js') }}"></script>
        <script src="{{ asset('js/skel-panels.min.js') }}"></script>
        <script src="{{ asset('js/init.js') }}"></script>
        <noscript>
            <link rel="stylesheet" href="{{ asset('css/skel-noscript.css') }}" />
            <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('css/ie/v8.css') }}" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('css/ie/v9.css') }}" /><![endif]-->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <style>
            #searchHam {
                background: black;
                border: black;
                color: white;
                border-color: black;
            }
            #searchHam:focus {
                outline: none !important;
                background: black;
                border: black;
                color: white;
                border-color: black;
            }
        </style>

    </head>
    <body class="homepage">

    <!-- Header -->
    <div id="header">
        <div class="container">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="#">H4m1lt0n</a></h1>
                <span>Design by TEMPLATED</span>
            </div>

            <!-- Nav -->
            <form id="searchForm" enctype="multipart/form-data" role="form" method="POST" action="{{ url('api/search') }}">
                <nav id="nav">
                        <ul>
                            <li><input id="searchHam" type="text" placeholder="Search"></li>
                        </ul>
                </nav>
                <input type="submit" hidden="true" />
            </form>

        </div>
    </div>
    <!-- Header -->

    <!-- Main -->
    <div id="main">
        <div class="container">
            <header>
                <h2>Gravida nibh quis urna</h2>
            </header>
            <div class="row">
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="images/pics01.jpg" alt="" /></a>
                        <p>Quisque dictum. Pellentesque viverra  enim. Integer nisl risus, sagittis convallis, rutrum id, elementum.</p>
                        <a href="#" class="button">Read More</a>
                    </section>
                </div>
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="images/pics11.jpg" alt="" /></a>
                        <p>Pellentesque viverra  enim. Tristique ante ut risus. Quisque dictum. Integer sagittis convallis elementum.</p>
                        <a href="#" class="button">Read More</a>
                    </section>
                </div>
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="images/pics12.jpg" alt="" /></a>
                        <p>Pellentesque viverra  enim. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum.</p>
                        <a href="#" class="button">Read More</a>
                    </section>
                </div>
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="images/pics13.jpg" alt="" /></a>
                        <p>Tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis elementum.</p>
                        <a href="#" class="button">Read More</a>
                    </section>
                </div>
            </div>
            <div class="divider">&nbsp;</div>
            <div class="row">

                <!-- Content -->
                <div class="8u skel-cell-important">
                    <section id="content">
                        <header>
                            <h2>Integer gravida nibh quis urna</h2>
                            <span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum</span>
                        </header>
                        <p><a href="#" class="image full"><img src="images/pics02.jpg" alt=""></a></p>
                        <p>This is <strong>Monochromed</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
                        <a href="#" class="button">Read More</a>
                    </section>
                </div>
                <!-- /Content -->

                <!-- Sidebar -->
                <div id="sidebar" class="4u">
                    <section>
                        <header>
                            <h2>Gravida praesent</h2>
                            <span class="byline">Praesent lacus congue rutrum</span>
                        </header>
                        <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Maecenas luctus lectus at sapien. Consectetuer adipiscing elit.</p>
                        <ul class="default">
                            <li><a href="#">Pellentesque quis lectus gravida blandit.</a></li>
                            <li><a href="#">Lorem ipsum consectetuer adipiscing elit.</a></li>
                            <li><a href="#">Phasellus nec nibh pellentesque congue.</a></li>
                            <li><a href="#">Cras aliquam risus pellentesque pharetra.</a></li>
                            <li><a href="#">Duis non metus commodo euismod lobortis.</a></li>
                            <li><a href="#">Lorem ipsum dolor adipiscing elit.</a></li>
                        </ul>
                    </section>
                </div>
                <!-- Sidebar -->

            </div>

        </div>
    </div>
    <!-- Main -->

    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="3u">
                    <section>
                        <ul class="style1">
                            <li><img src="images/pics05.jpg" width="78" height="78" alt="">
                                <p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
                                <p class="posted">August 11, 2014  |  (10 )  Comments</p>
                            </li>
                            <li><img src="images/pics06.jpg" width="78" height="78" alt="">
                                <p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
                                <p class="posted">August 11, 2014  |  (10 )  Comments</p>
                            </li>
                            <li><img src="images/pics07.jpg" width="78" height="78" alt="">
                                <p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
                                <p class="posted">August 11, 2014  |  (10 )  Comments</p>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="3u">
                    <section>
                        <ul class="style1">
                            <li class="first"><img src="images/pics08.jpg" width="78" height="78" alt="">
                                <p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
                                <p class="posted">August 11, 2014  |  (10 )  Comments</p>
                            </li>
                            <li><img src="images/pics09.jpg" width="78" height="78" alt="">
                                <p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
                                <p class="posted">August 11, 2014  |  (10 )  Comments</p>
                            </li>
                            <li><img src="images/pics10.jpg" width="78" height="78" alt="">
                                <p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
                                <p class="posted">August 11, 2014  |  (10 )  Comments</p>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="6u">
                    <section>
                        <header>
                            <h2>Aenean elementum</h2>
                        </header>
                        <p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus.</p>
                        <ul class="default">
                            <li><a href="#">Pellentesque quis lectus gravida blandit.</a></li>
                            <li><a href="#">Lorem ipsum consectetuer adipiscing elit.</a></li>
                            <li><a href="#">Phasellus nec nibh pellentesque congue.</a></li>
                            <li><a href="#">Cras aliquam risus pellentesque pharetra.</a></li>
                            <li><a href="#">Duis non metus commodo euismod lobortis.</a></li>
                            <li><a href="#">Lorem ipsum dolor adipiscing elit.</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <!-- Copyright -->
    <div id="copyright">
        <div class="container">
            <a href="{{url('/')}}">H4m1lt0n's</a> 2017. All Rights Reserved
        </div>
    </div>

    </body>
</html>
