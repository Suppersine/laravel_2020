@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgprof">

<br><br><br>

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')

        <div class="row">
            <div class="col-md-12">
                <form action="/final_project/public/user/profile/{{ $User->id }}" method="post"
                      enctype="multipart/form-data">
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="type">Display</label>
                        <select class="form-control" name="display" id="display">
                            <option value="Y"
                                    @if(old('display', $User->display)=='Y') selected @endif
                            >
                                Yes
                            </option>
                            <option value="N"
                                    @if(old('display', $User->display)=='N') selected @endif
                            >
                                No
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Name: (Not the string "new user")</label>
                        <input class="form-control" type="text" name="name" placeholder="your full name" value="{{ old('name', $User->name) }}">
                    </div>

                    <div class="form-group">
                        <label>Email: (Not the string "user@user", and Has to be unique)</label>
                        <input class="form-control" type="text" name="email" placeholder="your email" value="{{old('email', $User->email)}}">
                    </div>

                    <div class="form-group">
                        <label>Privilege:</label>
                        <select class="form-control" name="priv">
                            <option value="G" @if(old('priv', $User->priv)=='G') selected @endif>General</option>
                            <option value="A" @if(old('priv', $User->priv)=='A') selected @endif>Admin</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Member Type:</label>
                        <select class="form-control" name="position">
                            <option value="FA" @if(old('position', $User->position)=='FA') selected @endif>Faculty & Staff</option>
                            <option value="PG" @if(old('position', $User->position)=='PG') selected @endif>Postgrads</option>
                            <option value="UG" @if(old('position', $User->position)=='UG') selected @endif>Undergrads</option>
                            <option value="AG" @if(old('position', $User->position)=='AG') selected @endif>Postgrad Alumni</option>
                            <option value="AU" @if(old('position', $User->position)=='AU') selected @endif>Undergrad Alumni</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Organisation you belong to:</label>
                        <input class="form-control" type="text" name="organisation" placeholder="organisation" value="{{old('organisation', $User->organisation)}}">
                    </div>
                    <div class="form-group">
                        <label>Telephone Number:</label>
                        <input class="form-control" type="text" name="telephone" placeholder="telephone" value="{{old('telephone', $User->telephone)}}">
                    </div>
                    <div class="form-group">
                        <label>Please introduce yourself here:</label>
                        <input class="form-control" type="text" name="introduction" placeholder="introduction" value="{{old('introduction', $User->introduction)}}">
                    </div>
                    <div class="form-group">
                        <label>Have you received any rewards? If yes, what are they?</label>
                        <input class="form-control" type="text" name="awards" placeholder="awards" value="{{old('awards', $User->awards)}}">
                    </div>
                    <div class="form-group">
                        <label>Have you published any written works? If yes, what are they?</label>
                        <input class="form-control" type="text" name="publications" placeholder="publications" value="{{old('publications', $User->publications)}}">
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" id="photo"
                               name="photo" placeholder="Photo">
                        <img src="{{ $User->photo }}" />
                    </div>

                    <div class="form-group">
                        <label>What is the title of the Thesis/Research scope you are doing/about to do/recently done?</label>
                        <input class="form-control" type="text" name="thesistopic" placeholder="thesistopic" value="{{old('thesistopic', $User->thesistopic)}}">
                    </div>
                    <div class="form-group">
                        <label>If you have told the thesis topic/research scope, what is it about? Tell us briefly.</label>
                        <input class="form-control" type="text" name="thesisabstract" placeholder="thesisabstract" value="{{old('thesisabstract', $User->thesisabstract)}}">
                    </div>
                    <div class="form-group">
                        <label>If you have some achievements, what are the external links to them?</label>
                        <input class="form-control" type="text" name="linkx" placeholder="linkx" value="{{old('linka', $User->linkx)}}">
                    </div>
                    <div class="form-group">
                        <label>Are there any hard(unclickable, but draggable) links to your awards?</label>
                        <input class="form-control" type="text" name="linka" placeholder="linka" value="{{old('linka', $User->linka)}}">
                    </div>
                    <div class="form-group">
                        <label>Are there any hard links to your publications?</label>
                        <input class="form-control" type="text" name="linkr" placeholder="linkr" value="{{old('linkr', $User->linkr)}}">
                    </div>
                    <button type="submit" class="btn btn-default">Update</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</body>
@endsection