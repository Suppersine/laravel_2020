<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

            
    .row {
        padding: 4px;
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
    }

    .column {
        margin: 4px;
        flex: 25%;
        padding: 10px;
    }

    .frame {
        border: 4px solid #000000;
        border-radius: 4px;
    }
    
        </style>
    </head>
    <body class="bgcontact">

        @if(session()->has('user_id'))
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        @else
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        @endif

        @extends('layout.master')
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
                <div class="title m-b-md"><div class="hbox">
                    <img src="http://127.0.0.1/final_project/public/assets/css/weblogo.png" width="360px" height="auto"> Thaimosa Comlabs
                    <h4>Powered by Laravel</h4></div>
                </div>

                <div class="bbox"><div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div></div>
                
        <div class="row">
        <div class="column">
            <h1>CONTACT INFORMATION</h1>
            <h3><u>FRONT OFFICE</u></h3>
            <p>Tel. +886-97-415-1225<br>
    Email: supasin13rayong@gmail.com<br>
    FAX: +886-2-26209749<br>
    ADDRESS: No.7, Lane 2, Ren'Ai Rd., Tamsui Dist., New Taipei City 25137, Taiwan (R.O.C.)
            </p>
        </div>

        <div class="column, frame">
            <!--<img src="http://127.0.0.1/final_project/public/assets/css/map.jpg" alt="map" width="640" height="auto">-->
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Yuan%20Chuan%20Izakaya&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/">nordvpn coupon</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
        </div>
    
        <div class="column">
            <h1>聯絡資訊 CONTACT</h1>
            <h3><u>前辦公司</u></h3>
            <p>電話: 097-415-1225<br>
    E-mail: supasin13rayong@gmail.com<br>
    傳真: ( 02 ) 2620-9749<br>
    地址: 25137新北市淡水區仁愛路2巷7號2樓F室
            </p>
        </div>
        </div>
        
    <div class="row">
        <div class="column">
            <h3><u>MAIN OFFICE</u></h3>
            <p>Tel. +886-2-2621-5656 ext. 2616, 2665<br>
    teix@oa.tku.edu.tw<br>
    +886-2-26209749<br>
    No.151, Yingzhuan Rd., Tamsui Dist., New Taipei City 25137, Taiwan (R.O.C.)
            </p>
        </div>

        <div class="column, frame">
            <!--<img src="http://127.0.0.1/final_project/public/assets/css/map.jpg" alt="map" width="640" height="auto">-->
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Tamkang%20University&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/">nordvpn coupon</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
        </div>
    
        <div class="column">
            <h3><u>總公司</u></h3>
            <p>電話( 02 ) 2621-5656，分機 : 2616, 2665<br>
    E-mail: teix@oa.tku.edu.tw<br>
    傳真: ( 02 ) 2620-9749<br>
    地址: 25137新北市淡水區英專路151號工學大樓E646
            </p>
        </div>
        </div>
    
            </div>
        </div>
    </body>
</html>
