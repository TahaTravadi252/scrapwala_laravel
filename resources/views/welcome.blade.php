
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <h3>Scrapwala.com</h3>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('contactUs') }}">Contact-us</a></li>
                            <li><a href="{{ route('aboutUs') }}">About-us</a></li>
                            <li><a href="{{ route('terms') }}">Terms</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                           
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!--main image -->
    <img src="..\images\banner.jpeg" height="300px" width="1370px">
    
    <p><h3 align="center">The onlinescrapwala.com is a team of service providers who have set
     out to assist individuals in getting better deals for their scrap. They ensure that the 
     scrap is recycled and reused to its best. This platform 
    helps in processing waste for efficient reuse.</h3></p>


    <div class="row">
        <div class="col-sm-4" style="background-color:lavender;" align="center"><h2>INDUSTRIAL BUSINESS</h2>  
            <p align="center">We are proudly supported by an experienced team
            of professionals, who help us to manufacture a wide and 
            varied range of safety equipment and accessories.</p>
        </div>
      
        <div class="col-sm-4" style="background-color:lavenderblush;" align="center"><h2>24/7 SUPPORT</h2>
            <p align="center">If you’re looking for new ways to keep up with your customers, 
            or you want to start providing 24/7 support coverage, it’s important to have a mobile 
            version of your help desk</h3></p>
        </div>
        <div class="col-sm-4" style="background-color:lavender;" align="center"><h2>PROFESSIONAL TEAM</h2>
            <p align="center"> We offer programs lead by facilitators that are experts in their field, and we provide services on the historic Moraine Farm property, designed by Frederick Law Olmstead. Your next gathering could be in a setting that
            offers a retreat atmosphere and an event tailored to the goals of your organization.</h3></p>
        </div>
    </div>
    </div>



    <h1 align="center" style="color:blue;">Our Services</h1>

    <div class="row">
        <div class="col-sm-4" style="background-color:lavender;" align="center"><h2>PAPER SCRAP</h2>  
            <p align="center">The recycling of paper is the process by which waste 
            paper is turned into new paper products.</p>
        </div>
      
        <div class="col-sm-4" style="background-color:lavenderblush;" align="center"><h2>CARDBOARD SCRAP</h2>
            <p align="center">Cardboard is a generic term for heavy-duty 
            paper-based products having greater thickness.</h3></p>
        </div>
        <div class="col-sm-4" style="background-color:lavender;" align="center"><h2>ALUMINIUM SCRAP</h2>
            <p align="center"> Aluminium or aluminum is a chemical element with symbol 
            Al and atomic number 13</h3></p>
        </div>

        <div class="col-sm-4" style="background-color:powderblue;" align="center"><h2>ELECTRIC WIRES</h2>
            <p align="center"> We are able to install lights, outlets and 
            data/phone lines in your container</h3></p>
        </div>
         <div class="col-sm-4" style="background-color:lavender;" align="center"><h2>PLASTIC SCRAP</h2>
            <p align="center"> Plastic is material consisting of any of a wide range of
             synthetic or semi-synthetic organic compounds.</h3></p>
        </div>
        <div class="col-sm-4" style="background-color:lavenderblush;" align="center"><h2>IRON SCRAP</h2>
            <p align="center"> Iron is a chemical element with symbol Fe and atomic number 26.</h3></p>
        </div>
    </div>
    </div>
    
    <footer>
        <hr style="border: 1px solid red;">
        <p style="font-size:30px;" align="center">Devloped by:<br>
        1)Taha Travadi <br>2)Sahid Saiyad <br>
        3) Ganesh Ezava</p>
    </footer>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


<!--<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scrapwala.com</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!--<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>-->
