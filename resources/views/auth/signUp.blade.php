@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgauth">
<div class="container">
    <h1> {{$title}} </h1>

    @include('components.validationErrorMessage')

    <form action="/final_project/public/user/auth/sign-up" method="post">
        <div>
            <label>Name: (not "new user")</label>
            <input type="text" name="name" placeholder="your full name" value="{{old('name')}}">
        </div>
        <div>
            <label>Email: (not "user@user")</label>
                <input type="text" name="email" placeholder="your email" value="{{old('email')}}">
        </div>
        <div>
            <label>Password:</label>
                <input type="password" name="password" placeholder="password">
        </div>
        <div>
            <label>Confirm password:</label>
                <input type="password" name="password_confirmation" placeholder="confirm password">
        </div>
        <div>
            <label>Privilege:</label>
            <select name="priv">
                <option value="G" @if(old('type')=='G') selected @endif>General</option>
                <option value="A" @if(old('type')=='A') selected @endif>Admin</option>
            </select>
        </div>
        <div>
            <label>Are you registering as a non-guest user?:</label>
            <select name="display">
                <option value="Y" @if(old('type')=='Y') selected @endif>Yes</option>
                <option value="N" @if(old('type')=='N') selected @endif>No</option>
            </select>
        </div>
        <div>
            <label>Member Type:</label>
            <select name="position">
                <option value="FA" @if(old('type')=='FA') selected @endif>Faculty & Staff</option>
                <option value="PG" @if(old('type')=='PG') selected @endif>Postgrads</option>
                <option value="UG" @if(old('type')=='UG') selected @endif>Undergrads</option>
                <option value="AG" @if(old('type')=='AG') selected @endif>Postgrad Alumni</option>
                <option value="AU" @if(old('type')=='AU') selected @endif>Undergrad Alumni</option>
            </select>
        </div>
        <div>
            <label>Organisation:</label>
                <input type="text" name="organisation" placeholder="organisation" value="{{old('organisation')}}">
        </div>
        <div>
            <label>Telephone Number (choose only one working):</label>
                <input type="text" name="telephone" placeholder="telephone" value="{{old('telephone')}}">
        </div>
        <div>
            <label>Please introduce yourself here:</label>
                <input type="text" name="introduction" placeholder="introduction" value="{{old('introduction')}}">
        </div>
        <div>
            <label>Have you received any rewards? If yes, what are they?</label>
                <input type="text" name="awards" placeholder="awards" value="{{old('awards')}}">
        </div>
        <div>
            <label>Have you published any written works? If yes, what are they?</label>
                <input type="text" name="publications" placeholder="publications" value="{{old('publications')}}">
        </div>
        <div>
            <label>What is the title of the Thesis/Research scope you are doing/about to do/recently done?</label>
                <input type="text" name="thesistopic" placeholder="thesistopic" value="{{old('thesistopic')}}">
        </div>
        <div>
            <label>If you have told the thesis topic/research scope, what is it about? Tell us briefly.</label>
                <input type="text" name="thesisabstract" placeholder="thesisabstract" value="{{old('thesisabstract')}}">
        </div>
        <div>
            <label>If you have some achievements, what are the links to them?</label>
                <input type="text" name="linkx" placeholder="linkx" value="{{old('linkx')}}">
        </div>
        <button type="submit">Confirm register</button>

        {{ csrf_field() }}
    </form>

</div>
</body>
@endsection