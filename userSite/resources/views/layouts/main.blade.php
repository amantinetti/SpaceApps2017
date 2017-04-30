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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/skel.min.js') }}"></script>
    <script src="{{ asset('js/skel-panels.min.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/skel-noscript.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style.css') }}" />
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


@yield('content')

<!-- Footer -->

<!-- Copyright -->
<div id="copyright">
    <div class="container">
        <a href="{{url('/')}}">H4m1lt0n's</a> 2017. All Rights Reserved
    </div>
</div>

</body>
</html>
