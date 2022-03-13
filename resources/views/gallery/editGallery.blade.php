@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bggal">

<br><br><br>

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')

        <div class="row">
            <div class="col-md-12">
                <form action="/final_project/public/gallery/{{ $Gallery->id }}" method="post"
                      enctype="multipart/form-data">
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="type">Display</label>
                        <select class="form-control" name="display" id="display">
                            <option value="Y"
                                    @if(old('display', $Gallery->display)=='Y') selected @endif
                            >
                                Yes
                            </option>
                            <!--<option value="N"
                                    @if(old('display', $Gallery->display)=='N') selected @endif
                            >
                                No //disabled by deafult to let the photos appear when uploaded
                            </option>-->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" id="photo"
                               name="photo" placeholder="Photo">
                        <img src="{{ $Gallery->photo }}" />
                    </div>
                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input type="text" class="form-control" id="caption"
                               name="caption" placeholder="caption"
                               value="{{ old('caption', $Gallery->caption) }}">
                    </div>
                    <button type="submit" class="btn btn-default">Update</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</body>
@endsection