<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TimeStamp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 100px;
                color: #000000;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .bg {
                
                background-image: url("https://images5.alphacoders.com/740/thumb-1920-740924.jpg");


                height: 100%;
                width:100%;

                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                }
                

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('admin/login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


         
            
            <div class="content bg">
                <div class="title m-b-md">
                    TimeStamp
                    <div>
 <h1> <img src="https://image.flaticon.com/icons/png/512/1674/1674929.png" alt="TimeStamp" style = "width: 200px"></h1>
 <button type="button"  class="btn btn-dark btn-lg" style = "border-radius: 12px;" class="btn btn-outline-dark"><a href="{{ url('/home') }}">Get Started</a></button>
                    </div>
                </div>

                <!--<div class="links">-->
                <!--    <a href="https://laravel.com/docs">Dox</a>-->
                <!--    <a href="https://laracasts.com">Laracasts</a>-->
                <!--    <a href="https://laravel-news.com">News</a>-->
                <!--    <a href="https://blog.laravel.com">Blog</a>-->
                <!--    <a href="https://nova.laravel.com">Nova</a>-->
                <!--    <a href="https://forge.laravel.com">Forge</a>-->
                <!--    <a href="https://vapor.laravel.com">Vapor</a>-->
                <!--    <a href="https://github.com/alex21jabiro/TimeStamp">GitHub</a>-->
                </div>
            </div>
        </div>
    </body>
</html>
