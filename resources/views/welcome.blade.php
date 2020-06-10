<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API - REST</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
       <!-- <link rel="icon" type="image/x-icon" href="{{ asset('images/plazfer.png') }}"> -->
        <link href="{{ asset('css/welcome.css') }}" rel='stylesheet'>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <!--<a href="{{ route('login') }}">Login</a>-->

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h3>API-LARAVEL-BASE</h3>
            <!---      <img src="{{ asset('images/geosam.png') }}"  class="centinela-img"> --->
            <!---  <img src="{{ asset('images/logocentinela.png') }}"  class="yoplanifico-img"> --->
            </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="">API-REST</a>
                    <a href="">Luis Ramirez</a>
                    <a href=""></a>
                    <a href="https://github.com/tatuco">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
