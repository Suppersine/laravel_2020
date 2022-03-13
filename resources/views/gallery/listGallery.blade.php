@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bggal">

@if(session()->has('user_id'))
<br><br><br>
@endif

<div class="container">
    <h1 class="bhead">{{ $title }}</h1>

    @include('components.validationErrorMessage')

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>Photo</th>
                    <th>Caption</th>
                </tr>
                @foreach($GalleryPaginate as $Gallery)
                    <tr>
                        <td>
                            <a href="/final_project/public/gallery/{{ $Gallery->id }}">
                                <img src="{{ $Gallery->photo }}" width="532 px" height="auto"/>
                            </a>
                        </td>
                        <td>
                            {{ $Gallery->caption }}
                        </td>
                    </tr>
                @endforeach
            </table>

            {{-- Paginate button --}}
            {{ $GalleryPaginate->links() }}
        </div>
    </div>
</div>
<body>
@endsection