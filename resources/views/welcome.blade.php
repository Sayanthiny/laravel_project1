<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content container pt-3">
            <div class="jumbotron">
                <h1 class="display-4">Hello, Apptimus tech!</h1>
                <p class="lead">They offer customer desire application.</p>
                <hr class="my-4">
                <p>It is helpfull for them.</p>
                
                <div class="links">
                    <a href="https://appslanka.lk">Our Website</a>
                    <a href="/home"></a>                    
                </div>
            </div>

            </div>
        </div>

        <ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="home">HOME</a>
    <a class="nav-link" href="contact">CONTACT</a>
    <a class="nav-link" href="aboutus" target="_blank">ABOUT-US</a>
  </li>
</ul>
    </body>
</html>
