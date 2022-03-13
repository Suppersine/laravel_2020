@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bggal">

<br><br><br>

<div class="container">
    <h1>{{ $title }}</h1>
    <p><a href="/final_project/public/gallery/create">Upload a picture into the gallery</a></p>

    @include('components.validationErrorMessage')

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>edit</th>
                    <th>display</th>
                    <th>photo</th>
                    <th>caption</th>
                    <th>date updated</th>
                    <th>date created</th>
                </tr>
                @foreach($GalleryPaginate as $Gallery)
                    <tr>
                        <td>
                            <a href="/final_project/public/gallery/{{ $Gallery->id }}">
                                {{ $Gallery->id }}
                            </a>
                        </td>
                        <td><a href = "/final_project/public/gallery/{{ $Gallery->id }}/edit">edit</a></td>
                        <td>
                            <a href="/final_project/public/gallery/{{ $Gallery->id }}">
                                {{ $Gallery->display }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/gallery/{{ $Gallery->id }}">
                                <img src="{{ $Gallery->photo }}" width="300" height="auto"/>
                            </a>
                        </td>

                        <td> {{ $Gallery->caption }}</td>
                        <td> {{ $Gallery->updated_at }}</td>
                        <td> {{ $Gallery->created_at }}</td>
                    </tr>
                @endforeach
            </table>

            {{-- Paginate button --}}
            {{ $GalleryPaginate->links() }}
        </div>
    </div>
</div>
</body>
@endsection

