@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgauth">
<div class="container">
    <h1> Reset your password </h1>

    @include('components.validationErrorMessage')

    <form action="/final_project/public/user/auth/forgetpassword" method="post">
        <div>
            <label>Email:</label>
                <input type="text" name="email" placeholder="your email" value = "{{old('email')}}">
        </div>
        <div>
            <label>New Password:</label>
                <input type="password" name="password" placeholder="password">
        </div>
        <div>
            <label>Confirm new password:</label>
                <input type="password" name="password_confirmation" placeholder="confirm password">
        </div>
        <button type="submit">Reset Password</button>
        {{ csrf_field() }}
    </form>
</div>
</body>

@endsection