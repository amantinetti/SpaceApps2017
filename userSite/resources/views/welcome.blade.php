@extends('layouts.main')

@section('content')

    <!-- Header -->
    <div id="header">
        <div class="container">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="#">HAMILTON'S</a></h1>
            </div>

            <!-- Nav -->
            <form id="searchForm" enctype="multipart/form-data" role="form" method="GET" action="{{ url('api/search') }}">
                <nav id="nav">
                    <ul>
                        <li><input id="searchHam" name="sc" type="text" placeholder="Search"></li>
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
                        <a href="#" class="image full"><img src="{{asset('images/pics01.jpg')}}" width="90" height="150" alt="" /></a>
                        <a href="{{ url('/exoplanets')}}" class="button">Exoplanets</a>
                    </section>
                </div>
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="{{asset('images/pics11.jpg')}}" width="90" height="150" alt="" /></a>
                        <a href="{{ url('/galaxies')}}" class="button">Galaxys</a>
                    </section>
                </div>
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="{{asset('images/pics12.jpg')}}" width="90" height="150" alt="" /></a>
                        <a href="{{ url('/stars')}}" class="button">Stars</a>
                    </section>
                </div>
                <div class="3u">
                    <section>
                        <a href="#" class="image full"><img src="{{asset('images/pics13.jpg')}}" width="90" height="150" alt="" /></a>
                        <a href="{{ url('/solar_systems')}}" class="button">Solar Systems</a>
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
