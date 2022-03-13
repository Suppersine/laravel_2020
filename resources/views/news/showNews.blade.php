@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgnews">

@if(session()->has('user_id'))
<br><br><br>
@endif

    <div class="container">

        @include('components.validationErrorMessage')
        
        @if(session()->has('read_success'))
        <div class="alert alert-success">
            {{ session()->get('read_success') }}
            {{ session()->forget('read_success') }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $News->title }}</h1>
                <table class="table">
                    <tr>
                        <th>Date Updated</th>
                        <td>{{ $News->updated_at }}</td>
                    </tr>
                    <tr>
                        <th>Date Added</th>
                        <td>{{ $News->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>
                            {{ $News->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>
                            {{ $News->ndesc }}
                        </td>
                    </tr>
                    <tr>
                        <th>Visits</th>
                        <td>
                            {{ $News->visits }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form action="{{ $News->id }}/read" method="post">
                                <input type="hidden" name="id" value="{{ $News->id }}">
                                <button type="submit" class="btn btn-info">
                                    Back
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