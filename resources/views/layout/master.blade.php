<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> --}}
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <title>@yield('title')</title>
    </head>
    <body>
    	<nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">LOGO</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/service">Serivces</a></li>
                        <li><a href="/posts">Posts</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @include('includes/messages')
            @yield('content')
        </div>
    </body>
</html>
