@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgprof">

<br><br><br>

<div class="container">
    <h1> {{$title}} </h1>

    @include('components.validationErrorMessage')

    <form action="/final_project/public/user/profile/manage" method="get">
        <div>
            <input type="hidden" name="name" value="new user">

                <input type="hidden" name="email" value="user@user">

                <input type="hidden" name="password" value="123456">

                <input type="hidden" name="password_confirmation" value="123456">

            <input type="hidden" name="priv" value="G">

            <input type="hidden" name="display" value="N">

            <input type="hidden" name="position" value="FA">

                <input type="hidden" name="organisation" value="*">

                <input type="hidden" name="telephone" value="+886-000-000-0000">

                <input type="hidden" name="introduction" value="*">

                <input type="hidden" name="awards" value="*">

                <input type="hidden" name="publications" value="*">

                <input type="hidden" name="thesistopic" value="*">

                <input type="hidden" name="thesisabstract" value="*">

                <input type="hidden" name="linka" value="*">
                
                @for($i=1; $i<=10; $i++)
                <input type="hidden" name="linka_$i" value=null>
                <input type="hidden" name="linkr_$i" value=null>
                @endfor

                <input type="hidden" name="linkr" value="*">

                <input type="hidden" name="linkx" value="*">
        </div>
        <button type="submit">Confirm register</button>

        {{ csrf_field() }}
    </form>

</div>
</body>
@endsection