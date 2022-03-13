@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgrsc">

    @if(session()->has('user_id'))
    <br><br><br><br><br><br>
    @else
    <br><br><br>
    @endif

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')

        <div class="row">
            <div class="col-md-12">
                <form action="/final_project/public/research/{{ $Research->id }}" method="post" enctype="multipart/form-data">
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="type">Display</label>
                        <select class="form-control" name="display" id="display">
                            <option value="Y"
                                    @if(old('display', $Research->display)=='Y') selected @endif
                            >
                                Yes
                            </option>
                            <option value="N"
                                    @if(old('display', $Research->display)=='N') selected @endif
                            >
                                No
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Research Title</label>
                        <input type="text" class="form-control" id="title"
                               name="title" placeholder="Research title"
                               value="{{ old('title', $Research->title) }}">
                    </div>
                    <div class="form-group">
                        <label for="date_pub">Date Published (If not finished, set to the current date)</label>
                        <input type="date" class="form-control" id="date_pub"
                               name="date_pub" placeholder="date_pub"
                               value="{{ old('date_pub', $Research->date_pub) }}">

                    <div class="form-group">
                        <label for="personel">Authors</label>
                        <input type="text" class="form-control" id="personel"
                                name="personel" placeholder="personel"
                                value="{{ old('personel', $Research->personel) }}">
                    </div>
                               
                    </div>
                    <div class="form-group">
                    <label>Authors' ID# (may be filled one per slot)</label><div>
                        <input type="number" class="form-control" id="written_by_1" name="written_by_1" placeholder="Written by someone in this lab" value="{{ old('written_by_1', $Research->written_by_1) }}">
                        <input type="number" class="form-control" id="written_by_2" name="written_by_2" placeholder="Written by someone in this lab" value="{{ old('written_by_2', $Research->written_by_2) }}">
                        <input type="number" class="form-control" id="written_by_3" name="written_by_3" placeholder="Written by someone in this lab" value="{{ old('written_by_3', $Research->written_by_3) }}">
                        <input type="number" class="form-control" id="written_by_4" name="written_by_4" placeholder="Written by someone in this lab" value="{{ old('written_by_4', $Research->written_by_4) }}">
                        <input type="number" class="form-control" id="written_by_5" name="written_by_5" placeholder="Written by someone in this lab" value="{{ old('written_by_5', $Research->written_by_5) }}">
                        <input type="number" class="form-control" id="written_by_6" name="written_by_6" placeholder="Written by someone in this lab" value="{{ old('written_by_6', $Research->written_by_6) }}">
                        <input type="number" class="form-control" id="written_by_7" name="written_by_7" placeholder="Written by someone in this lab" value="{{ old('written_by_7', $Research->written_by_7) }}">
                        <input type="number" class="form-control" id="written_by_8" name="written_by_8" placeholder="Written by someone in this lab" value="{{ old('written_by_8', $Research->written_by_8) }}">
                        <input type="number" class="form-control" id="written_by_9" name="written_by_9" placeholder="Written by someone in this lab" value="{{ old('written_by_9', $Research->written_by_9) }}">
                        <input type="number" class="form-control" id="written_by_10" name="written_by_10" placeholder="Written by someone in this lab" value="{{ old('written_by_10', $Research->written_by_10) }}">
                        <input type="number" class="form-control" id="written_by_11" name="written_by_11" placeholder="Written by someone in this lab" value="{{ old('written_by_11', $Research->written_by_11) }}">
                        <input type="number" class="form-control" id="written_by_12" name="written_by_12" placeholder="Written by someone in this lab" value="{{ old('written_by_12', $Research->written_by_12) }}">
                    </div></div>
                    <div class="form-group">
                        <label for="abstract">Abstract</label>
                        <input type="text" class="form-control" id="abstract"
                               name="abstract" placeholder="abstract"
                               value="{{ old('abstract', $Research->abstract) }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="intro">Introduction</label>
                        <input type="text" class="form-control" id="intro"
                               name="intro" placeholder="intro"
                               value="{{ old('intro', $Research->intro) }}">
                    </div>

                    <div class="form-group">
                        <label for="methods">Methods</label>
                        <input type="text" class="form-control" id="methods"
                               name="methods" placeholder="methods"
                               value="{{ old('methods', $Research->methods) }}">
                    </div>

                    <div class="form-group">
                        <label for="result_discn">Results & Discussion</label>
                        <input type="text" class="form-control" id="result_discn"
                               name="result_discn" placeholder="result_discn"
                               value="{{ old('result_discn', $Research->result_discn) }}">
                    </div>

                    <div class="form-group">
                        <label for="conclusions">Conclusions</label>
                        <input type="text" class="form-control" id="conclusions"
                               name="conclusions" placeholder="conclusions"
                               value="{{ old('conclusions', $Research->conclusions) }}">
                    </div>
                    <div class="form-group">
                        <label for="refren">Reference</label>
                        <input type="text" class="form-control" id="refren"
                               name="refren" placeholder="refren"
                               value="{{ old('refren', $Research->refren) }}">
                    </div>
                    <div class="form-group">
                        <label for="linkz">Links</label>
                        <input type="text" class="form-control" id="linkz"
                               name="linkz" placeholder="linkz"
                               value="{{ old('linkz', $Research->linkz) }}">
                    </div>
                    <button type="submit" class="btn btn-default">Update</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</body>
@endsection