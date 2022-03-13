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
            <table class="table">
                <tr>
                    <th>name</th>
                    <th>photo</th>
                    <th>price</th>
                    <th>buy_count</th>
                    <th>total_price</th>
                    <th>created_at</th>
                </tr>
                @foreach($TransactionPaginate as $Transaction)
                    <tr>
                        <td>
                                {{ $Transaction->Merchandise->name }}
                        </td>
                        <td>
                                <img src="{{ $Transaction->Merchandise->photo }}" />
                        </td>
                        <td> {{ $Transaction->price }}</td>
                        <td> {{ $Transaction->buy_count }}</td>
                        <td> {{ $Transaction->total_price }}</td>
                        <td> {{ $Transaction->created_at }}</td>
                    </tr>
                @endforeach
            </table>

            {{-- Paginate button --}}
            {{ $TransactionPaginate->links() }}
        </div>
    </div>
</div>
</body>
@endsection
