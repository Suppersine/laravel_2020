@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgshop">

<br><br><br>

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')
        
        <div class="row">
            <div class="col-md-12">
                <form action="/final_project/public/merchandise/{{ $Merchandise->id }}" method="post"
                      enctype="multipart/form-data">
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="type">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="C"
                                    @if(old('status', $Merchandise->status)=='C') selected @endif
                            >
                                Create
                            </option>
                            <option value="S"
                                    @if(old('status', $Merchandise->status)=='S') selected @endif
                            >
                                Sell
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name"
                               name="name" placeholder="Product name"
                               value="{{ old('name', $Merchandise->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="name_en">English name</label>
                        <input type="text" class="form-control" id="name_en"
                               name="name_en" placeholder="English name"
                               value="{{ old('name_en', $Merchandise->name_en) }}">
                    </div>
                    <div class="form-group">
                        <label for="introduction">Introduction</label>
                        <input type="text" class="form-control" id="introduction"
                               name="introduction" placeholder="Introduction"
                               value="{{ old('introduction', $Merchandise->introduction) }}">
                    </div>
                    <div class="form-group">
                        <label for="introduction_en">English introduction</label>
                        <input type="text" class="form-control" id="introduction_en"
                               name="introduction_en" placeholder="English introduction"
                               value="{{ old('introduction_en', $Merchandise->introduction_en) }}">
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" id="photo"
                               name="photo" placeholder="Photo">
                        <img src="{{ $Merchandise->photo }}" />
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price"
                               name="price" placeholder="Price"
                               value="{{ old('price', $Merchandise->price) }}">
                    </div>
                    <div class="form-group">
                        <label for="remain_count">Remain count</label>
                        <input type="text" class="form-control" id="remain_count"
                               name="remain_count" placeholder="Remain count"
                               value="{{ old('remain_count', $Merchandise->remain_count) }}"
                        >
                    </div>
                    <button type="submit" class="btn btn-default">Update</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</body>
@endsection