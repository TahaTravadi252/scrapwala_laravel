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
    <img src="..\images\terms.jpg" height="300px" width="1370px">
    <h1 align="center"><u>TERMS & CONDITIONS</u></h1>
    <p style="font-size:25px;padding-top:20px;padding-right:70px;padding-bottom:20px;padding-left:70px;" align="justify"><b>"The Scrapwalaonline.com" is a team of service providers who have set out
    By using our Services, you are agreeing to these terms. Please read them carefully.</b></p>
    <p style="font-size:35px;padding-top:20px;padding-right:70px;padding-left:70px;" align="justify">Our Work</p>
    <ul style="font-size:15px;padding-right:70px;padding-bottom:20px;padding-left:70px;" align="justify">
      <li>You must follow this terms in order to use our services</li>
      <li>For our pickup service, you must have to provide your accurate information like address. You pickup will held on the schedule you provide while submitting the request. You can reschedule or cancel 
      your pickup request anytime after submitting your request. You must have 10Kg or more scrap for pickup, otherwise pickup charges may apply. Rates of all material are fixed as mentioned on our price list. For the rates of other materials that are not listed on the list your can contact us. We can also reschedule 
      your pickup request if we won't able to do it due to some reasons after informing you.</li>
   
    </ul>
    <p style="font-size:35px;padding-top:20px;padding-right:70px;padding-left:70px;" align="justify">Your Account</p>
    <ul style="font-size:15px;padding-right:70px;padding-bottom:20px;padding-left:70px;" align="justify">
      <li>In order to use our service, you need an account. </li>
      <li> You need a valid mobile number to create your account. 
      Your mobile number must need to be verified. In order 
      to place a pickup request, you must have to provide your
       accurate address of the pickup, if the address was not 
       accurate enough then your pickup request may get canceled. </li>
       <li>We want your information just for delivering our services. In some case, 
       you may also require providing your other personal information such as 
       "Date of Birth" etc. All the information you provide about yourself must be correct, 
       if we find the information inaccurate then your account may be suspended.</li>
   
    </ul>
    <p style="font-size:35px;padding-top:20px;padding-right:70px;padding-left:70px;" align="justify">Privacy policy</p>
    <ul style="font-size:15px;padding-right:70px;padding-bottom:20px;padding-left:70px;" align="justify">
      <li> The Scrapwala privacy policy explains what information we collect and how we use it.</li>
   </ul>
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