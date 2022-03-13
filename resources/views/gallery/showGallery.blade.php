@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bggal">

@if(session()->has('user_id'))
<br><br><br>
@endif

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')

        <div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <h1>#{{ $Gallery->id }}</h1>
                
                <table class="table"><td><img src="{{ $Gallery->photo }}" /></td><td>.</td></table>

                <table class="table">
                    <tr>
                        <th>date_updated</th>
                        <td>
                            {{ $Gallery->updated_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>date_created</th>
                        <td>
                            {{ $Gallery->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>
                            {{ $Gallery->caption }}
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</body>
@endsection