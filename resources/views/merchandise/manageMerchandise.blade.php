@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgshop">

<br><br><br>

<div class="container">
    <h1>{{ $title }}</h1>
    <p><a href="/final_project/public/merchandise/create">Create Merchandise</a></p>
    
    @include('components.validationErrorMessage')

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>photo</th>
                    <th>status</th>
                    <th>price</th>
                    <th>remain-count</th>
                    <th>edit</th>
                </tr>
                @foreach($MerchandisePaginate as $Merchandise)
                    <tr>
                        <td>
                            <a href="/final_project/public/merchandise/{{ $Merchandise->id }}">
                                {{ $Merchandise->id }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/merchandise/{{ $Merchandise->id }}">
                                {{ $Merchandise->name }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/merchandise/{{ $Merchandise->id }}">
                                <img src="{{ $Merchandise->photo }}" />
                            </a>
                        </td>
                        <td> {{ $Merchandise->status }}</td>
                        <td> {{ $Merchandise->price }}</td>
                        <td> {{ $Merchandise->remain_count }}</td>
                        <td><a href = "/final_project/public/merchandise/{{ $Merchandise->id }}/edit">edit</a></td>
                    </tr>
                @endforeach
            </table>

            {{-- Paginate button --}}
            {{ $MerchandisePaginate->links() }}
        </div>
    </div>
</div>
</body>
@endsection

