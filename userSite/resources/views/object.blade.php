@extends('layouts.main')

@section('content')

    <!-- Header -->
    <div id="header">
        <div class="container">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="#">HAMILTON'S</a></h1>
                <span>A Space Object Finder</span>
            </div>

        </div>
    </div>
    <!-- Header -->

    <!-- Main -->
    <div id="main">
        <div class="container">
            <header>
                <h2>{{$content->name}}</h2>
                <h4>{{$content->type}}</h4>
            </header>
            <div class="row">
                <div class="col-md-4">
                    <section>
                        <h2>{{$content->name}}</h2>
                        <h4>{{$content->type}}</h4>
                        <ul>
                            @foreach($content->properties as $prop)
                                <li> {{$prop['name']}} : {{$prop['value']}} </li>
                            @endforeach
                        </ul>
                    </section>
                </div>
                <div class="col-md-4">
                    <section>

                    </section>
                </div>
                <div class="col-md-4">
                    <section>
                        <p></p>
                    </section>
                </div>

            </div>
            <div class="divider">&nbsp;</div>

        </div>
    </div>
    <!-- Main -->
@endsection