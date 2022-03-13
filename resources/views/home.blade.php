<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        margin: 10px;
        padding: 10px;
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
    }

    .column {
        margin: 10px;
        flex: 10%;
        padding: 10px;
    }

    * {
    box-sizing: border-box;
}

.columnContainer {
    width: 100%;
    display: flex;
}

.leftColumn {
    margin: 10px;
        flex: 10%;
        padding: 10px;
}

.rightColumn {
    margin: 10px;
        flex: 10%;
        padding: 10px;
}

  .leftColumn {
      order: 1;
  }

  .rightColumn {
      order: 2;
  }

    .frame {
        border: 4px solid #000000;
        border-radius: 4px;
    }

    .slider {
      width: 273px;
      height: 390px;
      object-fit: cover;
    }

    .cell th{
        border-style: dotted;
        border-color:saddlebrown;
    }

    .cell td{
        border-style: dotted;
        border-color:coral;
    }
        </style>
    </head>
    <body class="bghome">

        @if(session()->has('user_id'))
        <br><br><br><br><br><br><br><br><br>
        @else
        <br><br><br><br><br><br>
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
                <div class="title m-b-md">
                    <br><div class="hbox"><img src="http://127.0.0.1/final_project/public/assets/css/weblogo.png" width="360px" height="auto"> Thaimosa Comlabs
                    <h4>Powered by Laravel</h4></div>
                </div>

                <div class="links" style="background-color: rgba(255, 255, 255, 0.75); 
                box-shadow: 0 0 10px 20px rgba(255, 255, 255, 0.75);">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

                <section>
                    <center><h1 class="bbox bhead">Home Page 首頁</h1></center>
                    <div class="row">
                        <div class="column, frame">
                            <img class="slider" src="http://127.0.0.1/final_project/public/assets/css/higif.gif" alt="higif">
                        </div>
            
                        <div class="column">
                            <section>
                            <h3 class="bhead">News 最新消息</h3>
                            <center><table class="cell">
              <tr >
                <th><center>Date</center></th>
                <th><center>Title</center></th>
                <th><center>Visits<center></th>
              </tr>
              @foreach($NewsPaginate as $News)
              <tr>
                  <td> {{ $News->newsdate }}</td>
                  <td>
                      <a href="/final_project/public/news/{{ $News->id }}">
                          {{ $News->title }}
                      </a>
                  </td>
                  <td> {{ $News->visits }}</td>
              </tr>
          @endforeach
            </table></center>
            <a class="charglow" href="http://127.0.0.1/final_project/public/news">See All News</a>
                            </section>
                        </div>

                    <div class="column, columncontainer, frame">
                        <div class="leftColumn">
                        <a href="/final_project/public/webmanual.pdf"><img class="frame" src="http://127.0.0.1/final_project/public/assets/css/how2browse.jpg" alt="how2browse" width="273px" height="auto"></a>
                        </div>
                        <div class="rightColumn">
                        <a href="/final_project/public/sitemap"><img class="frame" src="http://127.0.0.1/final_project/public/assets/css/sitemap.jpg" alt="sitemap" width="273px" height="auto"></a>
                        </div>
                    </div>

                </section>

        <section class="row">
        <div class="column, frame">
            <a href="/final_project/public/about"><img src="http://127.0.0.1/final_project/public/assets/css/aboutbtt.jpg" alt="map" width="384" height="auto"></a>
        </div>

        <div class="column, frame">
            <a href="/final_project/public/gallery"><img src="http://127.0.0.1/final_project/public/assets/css/gallerybtt.jpg" alt="map" width="384" height="auto"></a>
        </div>
    
        <div class="column, frame">
            <a href="/final_project/public/contact"><img src="http://127.0.0.1/final_project/public/assets/css/contactbtt.jpg" alt="map" width="384" height="auto"></a>
        </div>
    </section>
    
            </div>
        </div>
    </body>
</html>
