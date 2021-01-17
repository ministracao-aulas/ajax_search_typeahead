<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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
                font-size: 70px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
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
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Serach with Typeahead and Select2
                </div>

                <div class="links">
                    <a href="{{ route('post.typeahead') }}">Typeahead</a>
                    <a href="{{ route('post.select2') }}">Select2</a>
                </div>

                <hr>

                <div class="m-b-md" style=" text-align: left; ">
                    <h5>Source links: </h5>
                    <ul>
                        <li><a href="https://www.nicesnippets.com/blog/laravel-6-typeahead-search-laravel-autocomplete-search-example">
                            Tutorial: Laravel 7/6 Typeahead Search | Laravel Autocomplete Search Example
                        </a></li>
                        <li><a href="https://select2.org/data-sources/ajax/">Ajax remote data</a></li>
                        <li><a href="(https://select2.org/)">Select2.org</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
