@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgprof2">

<br><br><br>

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')

        <div class="row">
            <div class="col-md-12">
                <form action="/final_project/public/user/profile/{{ $User->id }}" method="post"
                      enctype="multipart/form-data">
                    {{ method_field('POST') }}

                    <div class="form-group">
                        <label>Password: (Need to be retyped, 6 characters long, and make sure you'll remmeber it)</label>
                        <input class="form-control" type="password" name="password" placeholder="your new password">
                    </div>

                    <div class="form-group">
                        <label>Password Comfirmation: (Must match the above)</label>
                        <input class="form-control" type="password" name="password_confirmation" placeholder="confirm your password">
                    </div>

                    <button type="submit" class="btn btn-default">Update</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</body>
@endsection