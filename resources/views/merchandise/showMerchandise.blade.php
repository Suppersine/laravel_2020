@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgshop">

<br><br><br>

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')
        
        @if(session()->has('buy_success'))
        <div class="alert alert-success">
            {{ session()->get('buy_success') }}
            {{ session()->forget('buy_success') }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $Merchandise->name }}</td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>
                            <img src="{{ $Merchandise->photo }}" />
                        </td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>
                            {{ $Merchandise->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>Remain count</th>
                        <td>
                            {{ $Merchandise->remain_count }}
                        </td>
                    </tr>
                    <tr>
                        <th>Introduction</th>
                        <td>
                            {{ $Merchandise->introduction }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form action="{{ $Merchandise->id }}/buy" method="post">
                                Buy counts
                                <select name="buy_count">
                                    @for($count = 0; $count <= $Merchandise->remain_count; $count++)
                                        <option value="{{ $count }}">{{ $count }}</option>
                                    @endfor
                                </select>
                                <button type="submit" class="btn btn-info">
                                    Buy
                                </button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</body>
@endsection