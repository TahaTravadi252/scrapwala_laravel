
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
    <img src="..\images\aboutus.jpg" height="300px" width="1370px">
    <h1 align="center"><u>ABOUT COMPANY</u></h1>
    <p style="font-size:25px;padding-top:20px;padding-right:70px;padding-bottom:20px;padding-left:70px;" align="justify"><b>"The Scrapwalaonline.com" is a team of service providers who have set out
     to assist individuals in getting better deals for their scrap. 
     They ensure that the scrap is recycled and reused to its best. 
     This platform helps in processing waste for efficient reuse.</b></p>
     
    
     <p style="font-size:20px;padding-top:20px;padding-right:70px;padding-bottom:20px;padding-left:70px;" align="justify">It is a door to door service which 
     ensures a better reach to customers 
     and satisfying their needs. The existing scrap management 
     in the market is not very efficient these days. Hence, 
     we come together as a team to ensure a hassle free method 
     of processing waste along with maximum benefit to our customers, 
     without harming our environment.</p>

     <p style="font-size:20px;padding-top:20px;padding-right:70px;padding-bottom:20px;padding-left:70px;" align="justify"> 
     Customers can connect with our efficient team through our website 
     and mobile app for smooth operations. Communication becomes 
     effective as it takes place over calls and the customer need
      not visit various scrap vendors hence saving time and energy. 
      Moreover, customers get to finalize a good deal with us. 
      Our team drops in at the customer’s house and weighs their 
      scrap to calculate the final price. The process overall is 
      very simple and efficient. It provides immediate scrap 
      solutions to the customers and ensures maximum customer satisfaction.</p>


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
