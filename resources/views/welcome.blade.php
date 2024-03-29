<!--  -->

<!doctype html>
            <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <title>Online Car Rental Service</title>

                    <!-- Fonts -->
                    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
                    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->

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
                            font-size: 84px;
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
                                    
                          <li class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown"   >
                         {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                 </a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                       </form>
                          </div></li>
                          
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
                            Online Car Rental Service
                            </div>

                            <div class="links">
                                <a href="#">Home</a>
                                <a href="#">Contact Us</a>
                                <a href="#">About Us</a>
                                <a href="#">FAQs</a>
                                <a href="#">Cars Listing</a>
                            </div>
                        </div>
                    </div>
                </body>
            </html>
