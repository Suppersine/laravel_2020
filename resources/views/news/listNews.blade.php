@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgnews">

@if(session()->has('user_id'))
<br><br><br>
@endif

<div class="container">
    <h1>{{ $title }}</h1>
    
    @include('components.validationErrorMessage')

    @if(session()->has('read_success'))
    <div class="alert alert-success">
        {{ session()->get('read_success') }}
        {{ session()->forget('read_success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>date announed</th>
                    <th>type</th>
                    <th>title</th>
                    <th>view-count</th>
                </tr>
                @foreach($NewsPaginate as $News)
                    <tr>
                        <td> {{ $News->newsdate }}</td>
                        <td> {{ $News->type }}</td>
                        <td>
                            <a href="/final_project/public/news/{{ $News->id }}">
                                {{ $News->title }}
                            </a>
                        </td>
                        <td> {{ $News->visits }}</td>
                    </tr>
                @endforeach
            </table>

            {{-- Paginate button --}}
            {{ $NewsPaginate->links() }}
        </div>
    </div>
</div>
</body>
@endsection