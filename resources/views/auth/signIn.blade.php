@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgauth">

@if(session()->has('user_id'))

<div class="container">
    <br><br><br>
    <h1>You have already signed in</h1>
    <a class="bhead" href="/final_project/public/home">Return Home</a>
</div>

@else

<div class="container">
    <h1> Sign in </h1>

    @include('components.validationErrorMessage')

    <form action="/final_project/public/user/auth/sign-in" method="post">
        <div>
            <label>Email:</label>
                <input type="text" name="email" placeholder="your email" value = "{{old('email')}}">
        </div>
        <div>
            <label>Password:</label>
                <input type="password" name="password" placeholder="password">
        </div>
        <button type="submit">Confirm Login</button>
        {{ csrf_field() }}
        <hr>
    </form>
    <form action="/final_project/public/user/auth/forgetpassword" method="get"><button>Forget Password</button>
    </form>
    {{ csrf_field() }}
</div>

@endif

</body>

@endsection