@extends('layouts.main')

@section('content')

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
                <h2>Categories</h2>
            </header>
            <div class="row">
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="images/pics01.jpg" width="90" height="150" alt="" /></a>
                        <p>Quisque dictum. Pellentesque viverra  enim. Integer nisl risus, sagittis convallis, rutrum id, elementum.</p>
                        <a href="{{ url('/exoplanets')}}" class="button">Read More</a>
                    </section>
                </div>
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="images/pics11.jpg" width="90" height="150" alt="" /></a>
                        <p>Pellentesque viverra  enim. Tristique ante ut risus. Quisque dictum. Integer sagittis convallis elementum.</p>
                        <a href="{{ url('/galaxies')}}" class="button">Read More</a>
                    </section>
                </div>
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="images/pics12.jpg" width="90" height="150" alt="" /></a>
                        <p>Pellentesque viverra  enim. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum.</p>
                        <a href="{{ url('/stars')}}" class="button">Read More</a>
                    </section>
                </div>
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="images/pics13.jpg" width="90" height="150" alt="" /></a>
                        <p>Tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis elementum.</p>
                        <a href="{{ url('/solar_systems')}}" class="button">Read More</a>
                    </section>
                </div>
            </div>
            <div class="divider">&nbsp;</div>
            <div class="row">





            </div>

        </div>
    </div>
    <!-- Main -->



@endsection
