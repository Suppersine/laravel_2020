@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgnews">

<br><br><br>

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')

        <div class="row">
            <div class="col-md-12">
                <form action="/final_project/public/news/{{ $News->id }}" method="post"
                      enctype="multipart/form-data">
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="display">Display</label>
                        <select class="form-control" name="display" id="display">
                            <option value="Y"
                                    @if(old('display', $News->display)=='Y') selected @endif
                            >
                                Yes
                            </option>
                            <option value="N"
                                    @if(old('display', $News->display)=='N') selected @endif
                            >
                                No
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type"
                        name="type" placeholder="News type"
                        value="{{ old('type', $News->type) }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title"
                               name="title" placeholder="News title"
                               value="{{ old('title', $News->title) }}">
                    </div>
                    <div class="form-group">
                        <label for="ndesc">News Description</label>
                        <input type="text" class="form-control" id="ndesc"
                               name="ndesc" placeholder="News Description"
                               value="{{ old('ndesc', $News->ndesc) }}">
                    </div>
                    <div class="form-group">
                        <label for="visit">Visit Count is set to O by default, unless intervened</label>
                        <input type="hidden" class="form-control" id="visit"
                               name="visit" placeholder="visit"
                               value="{{ old('visit', $News->visit) }}">
                    </div>
                    <div class="form-group">
                        <label for="visit">News Date</label>
                        <input type="date" class="form-control" id="newsdate"
                               name="newsdate" placeholder="newsdate"
                               value="{{ old('newsdate', $News->newsdate) }}">
                    </div>
                    <button type="submit" class="btn btn-default">Update</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</body>
@endsection