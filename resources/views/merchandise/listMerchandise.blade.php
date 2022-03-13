@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgshop">

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
                    <th>name</th>
                    <th>photo</th>
                    <th>price</th>
                    <th>remain-count</th>
                </tr>
                @foreach($MerchandisePaginate as $Merchandise)
                    <tr>
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
                        <td> {{ $Merchandise->price }}</td>
                        <td> {{ $Merchandise->remain_count }}</td>
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