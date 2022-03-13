<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title') - Shop Laravel</title>
    <script src="/final_project/public/assets/js/jquery-2.2.4.min.js" defer></script>
    <script src="/final_project/public/assets/js/bootstrap.min.js" defer></script>
    <script src="/final_project/public/assets/js/js.cookie.js" defer></script>
    <script src="/final_project/public/assets/js/shop-laravel.js" defer></script>
    <link rel="stylesheet" href="/final_project/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/final_project/public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/final_project/public/assets/css/shop_laravel.css">
</head>
<body>

    @if(session()->has('user_id'))
    <center><div class="hidden"><p>Your ID is #{{ $user_id = session()->get('user_id') }}
    and your priv is {{ $user_priv = session()->get('user_priv') }}</p></div></center>
    @endif

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navchar" href="/final_project/public/home">Thaimosa Comlabs Taipei</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="/final_project/public" class="dropdown-toggle navchar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Menu<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/final_project/public/about">About</a></li>
                        <li><a href="/final_project/public/news">News</a></li>
                        <li><a href="/final_project/public/gallery">Gallery</a></li>
                        <li><a href="/final_project/public/sitemap">Sitemap</a></li>
                        <li><a href="/final_project/public/user/profile">Members & Profiles</a></li>
                        <li><a href="/final_project/public/merchandise">Shop & Merchandise</a></li>
                        <li><a href="/final_project/public/research">Research</a></li>
                        <li><a href="/final_project/public/awards">Awards</a></li>
                        <li><a href="/final_project/public/pub">Publications</a></li>
                        <li><a href="/final_project/public/contact">Contact</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(session()->has('user_id'))
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle navchar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Personal Records<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/final_project/public/transaction">Shopping Transactions List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle navchar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Privilege Tools <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">@if($user_priv == 'A')
                            <li><a href="/final_project/public/merchandise/manage">Merchandise Management</a></li>
                            <li><a href="/final_project/public/user/profile/manage">User/Member Profile Management</a></li>
                            <li><a href="/final_project/public/news/manage">News Management</a></li>
                            <li><a href="/final_project/public/awards/manage">Awards Management</a></li>
                            <li><a href="/final_project/public/gallery/manage">Gallery Management</a></li>
                            <li><a href="/final_project/public/pub/manage">Publications Management</a></li>
                            <li><a href="/final_project/public/research/manage">Research Management</a></li>
                            @else
                            <li><a href="/final_project/public/user/profile/{{$user_id}}/edit_g">Manage Your profile</a></li>
                            <li><a href="/final_project/public/user/profile/{{$user_id}}/changepw">Change Password</a></li>
                            @endif
                        </ul>
                    </li>
                    <li><a class="navchar" href="/final_project/public/user/auth/sign-out">Sign out</a></li>
                @else
                    <li><a class="navchar" href="/final_project/public/user/auth/sign-in">Sign in</a></li>
                    <li><a class="navchar" href="/final_project/public/user/auth/sign-up">Sign up</a></li>
                @endif
            </ul>
        </div>
    </div>

    @if(session()->has('user_id'))
    <center><div class="alert alert-info"><p>Your ID is #{{ $user_id = session()->get('user_id') }}
    and your priv is {{ $user_priv = session()->get('user_priv') }}</p></div></center>
    @endif

</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>