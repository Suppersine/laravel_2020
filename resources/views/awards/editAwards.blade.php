@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgawards">

<br><br><br>

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')

        <div class="row">
            <div class="col-md-12">
                <form action="/final_project/public/awards/{{ $Awards->id }}" method="post"
                      enctype="multipart/form-data">
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="type">Display</label>
                        <select class="form-control" name="display" id="display">
                            <option value="Y"
                                    @if(old('display', $Awards->display)=='Y') selected @endif
                            >
                                Yes
                            </option>
                            <option value="N"
                                    @if(old('display', $Awards->display)=='N') selected @endif
                            >
                                No
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Awards Title</label>
                        <input type="text" class="form-control" id="title"
                               name="title" placeholder="Awards title"
                               value="{{ old('title', $Awards->title) }}">
                    </div>

                    <div class="form-group">
                        <label for="cat">Category</label>
                        <input type="text" class="form-control" id="cat"
                               name="cat" placeholder="cat"
                               value="{{ old('cat', $Awards->cat) }}">
                    </div>

                    <div class="form-group">
                        <label for="date_received">Date received</label>
                        <input type="text" class="form-control" id="date_received"
                               name="date_received" placeholder="Date Received"
                               value="{{ old('date_received', $Awards->date_received) }}">

                    <div class="form-group">
                        <label for="sponsor">Given by</label>
                        <input type="text" class="form-control" id="sponsor"
                                name="sponsor" placeholder="sponsor"
                                value="{{ old('sponsor', $Awards->sponsor) }}">
                    </div>

                    <div class="form-group">
                        <label for="personel">Winners</label>
                        <input type="text" class="form-control" id="personel"
                                name="personel" placeholder="personel"
                                value="{{ old('personel', $Awards->personel) }}">
                    </div>
                               
                    </div>
                    <div class="form-group">
                    <label>Given to...(Member ID#)...</label><div>
                        <input type="number" class="form-control" id="given_to_1" name="given_to_1" placeholder="Given to someone in this lab" value="{{ old('given_to_1', $Awards->given_to_1) }}">
                        <input type="number" class="form-control" id="given_to_2" name="given_to_2" placeholder="Given to someone in this lab" value="{{ old('given_to_2', $Awards->given_to_2) }}">
                        <input type="number" class="form-control" id="given_to_3" name="given_to_3" placeholder="Given to someone in this lab" value="{{ old('given_to_3', $Awards->given_to_3) }}">
                        <input type="number" class="form-control" id="given_to_4" name="given_to_4" placeholder="Given to someone in this lab" value="{{ old('given_to_4', $Awards->given_to_4) }}">
                        <input type="number" class="form-control" id="given_to_5" name="given_to_5" placeholder="Given to someone in this lab" value="{{ old('given_to_5', $Awards->given_to_5) }}">
                        <input type="number" class="form-control" id="given_to_6" name="given_to_6" placeholder="Given to someone in this lab" value="{{ old('given_to_6', $Awards->given_to_6) }}">
                        <input type="number" class="form-control" id="given_to_7" name="given_to_7" placeholder="Given to someone in this lab" value="{{ old('given_to_7', $Awards->given_to_7) }}">
                        <input type="number" class="form-control" id="given_to_8" name="given_to_8" placeholder="Given to someone in this lab" value="{{ old('given_to_8', $Awards->given_to_8) }}">
                        <input type="number" class="form-control" id="given_to_9" name="given_to_9" placeholder="Given to someone in this lab" value="{{ old('given_to_9', $Awards->given_to_9) }}">
                        <input type="number" class="form-control" id="given_to_10" name="given_to_10" placeholder="Given to someone in this lab" value="{{ old('given_to_10', $Awards->given_to_10) }}">
                        <input type="number" class="form-control" id="given_to_11" name="given_to_11" placeholder="Given to someone in this lab" value="{{ old('given_to_11', $Awards->given_to_11) }}">
                        <input type="number" class="form-control" id="given_to_12" name="given_to_12" placeholder="Given to someone in this lab" value="{{ old('given_to_12', $Awards->given_to_12) }}">
                    </div></div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" id="photo"
                               name="photo" placeholder="Photo">
                        <img src="{{ $Awards->photo }}" />
                    </div>
                    <div class="form-group">
                        <label for="adesc">Description</label>
                        <input type="text" class="form-control" id="adesc"
                               name="adesc" placeholder="adesc"
                               value="{{ old('adesc', $Awards->adesc) }}">
                    </div>
                    <div class="form-group">
                        <label for="commentary">Commentary/Reference</label>
                        <input type="text" class="form-control" id="commentary"
                               name="commentary" placeholder="commentary"
                               value="{{ old('commentary', $Awards->commentary) }}">
                    </div>
                    <button type="submit" class="btn btn-default">Update</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</body>
@endsection