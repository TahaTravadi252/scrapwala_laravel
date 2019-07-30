
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>contact us</title>

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
    <h1 align="center">Contact Us
    
    </h1>
    
        <div class="col-sm-6"  align="center">
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14838.32761933719!2d71.211644!3d21.6022372!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd05fdc0fffd7f89f!2svoraji-bhangarwala!5e0!3m2!1sen!2sin!4v1562582032793!5m2!1sen!2sin" width="600" height="550" frameborder="0" style="border:0" allowfullscreen align="middle"> </iframe>
        </div>
           

        <div class="col-sm-6"  align="center">
            <h3>Contact</h3>
            <p>scrapwala.com</p>
            <p>Address:jail road avalmiya street amreli-365601</p>
            <p>Contact:1)+917817805261 2)+919428296574<p>
            <p>Email:bhangarwala5253amreli@gmail.com</p>
            <hr>
            <form action = "conatctUs" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                <p>Name</p> <input type="text" name="name">
                <p>Email</p> <input type="text" name="email">
                <p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
                <input type="submit" value="Send"><input type="reset" value="Clear">
            </form>
        
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
  
  
  

    