<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sitemap</title>

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
        margin: 1px;
        flex: 1%;
        padding: 1px;
    }
        </style>
    </head>
    <body class="bgsitemap">

        @if(session()->has('user_id'))
        <center><div class="hidden"><p>Your ID is #{{ $user_id = session()->get('user_id') }}
        and your priv is {{ $user_priv = session()->get('user_priv') }}</p></div></center>
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

                @if(session()->has('user_id'))
                <br><br><br><br><br><br><br><br>
                @endif

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
                
                <h1 class="bhead">Sitemap</h1>
                <h4 class="bhead">Whether you are logged in or not, on this page, you have access to this whole website.<h4>
                <h5 class="bhead">By middle-clicking the links below, you can keep this sitemap open while you browse here.</h5>

                <section class="grow">
                    <div class="gcolumn">
                        <ul><h3>Home Menu</h3>
                            <li><a href="/final_project/public/about">About</a><p>Introduction to our institute, along with its history and presidents.</p></li>
                            <li><a href="/final_project/public/gallery">Gallery</a><p>is where the admins upload pictures, so you can view them.</p></li>
                            <li><a href="/final_project/public/news">News</a><p>Keep up to date with what's going on in our institute.</p></li>
                            <li><a href="/final_project/public/contact">Contact</a><p>is where you can communicate with us</p></li>
                            <li><a href="/final_project/public/home">Back</a><p>to the home page.</p></li>
                        </ul>
                    </div>

                    @if((session()->has('user_id')) && ($user_priv == 'A'))
                    <div class="gcolumn">
                        <ul><h3>Admin's menu</h3>
                            <li><a href="/final_project/public/merchandise/manage">Merchandise Management</a></li>
                            <li><a href="/final_project/public/user/profile/manage">User/Member Profile Management</a></li>
                            <li><a href="/final_project/public/news/manage">News Management</a></li>
                            <li><a href="/final_project/public/awards/manage">Awards Management</a></li>
                            <li><a href="/final_project/public/gallery/manage">Gallery Management</a></li>
                            <li><a href="/final_project/public/pub/manage">Publications Management</a></li>
                            <li><a href="/final_project/public/research/manage">Research Management</a></li>
                        </ul>
                    </div>
                    @endif

                    <div class="gcolumn">
                    <ul><h3>Archive Menu</h3>
                        <li><a href="/final_project/public/user/profile">Members & Profiles</a><p>Here, you can see the list of our members, sortable by position/role.</p></li>
                        <li><a href="/final_project/public/merchandise">Shop & Merchandise</a><p>is where we sell research byproducts, and institute-promoting items.</p></li>
                        <li><a href="/final_project/public/research">Research</a><p>tells what we do academically, and introduce to example papers.</p></li>
                        <li><a href="/final_project/public/awards">Awards</a><p>we have won can be found here.</p></li>
                        <li><a href="/final_project/public/pub">Publications</a><p>Are you browsing for knowledge? This is the right section for you.</p></li>
                    </ul>
                            </div>

                </section>

            </div>
        </div>
    </body>
</html>
