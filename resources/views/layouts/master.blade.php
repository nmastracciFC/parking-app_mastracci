<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SPOT | The Parking Garage App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
       
        <div id="app">
            <div class="content">
                <img class="logo" src="images/logo_spot-circle.svg" alt="SPOT Parking Logo">

                <nav class="login-main">
                    <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                    
                    
                    
                </nav>
            </div>

            <router-link to="/" exact>HOME</router-link>
            <router-link to="/about">ABOUT</router-link>
            <router-link to="/garages">GARAGES</router-link>
            <router-view></router-view>
            
                    
                
        </div>
        
        <script src="/js/app.js"></script>
    </body>
</html>
