@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgnews">

<br><br><br>

<div class="container">
    <h1>{{ $title }}</h1>
    <p><a href="/final_project/public/news/create">Announce a new piece of news</a></p>
    
    @include('components.validationErrorMessage')

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>display</th>
                    <th>updated_at</th>
                    <th>created_at</th>
                    <th>date</th>
                    <th>type</th>
                    <th>title</th>
                    <th>description</th>
                    <th>visits</th>
                    <th>edit</th>
                </tr>
                @foreach($NewsPaginate as $News)
                    <tr>
                        <td>
                            <a href="/final_project/public/news/{{ $News->id }}">
                                {{ $News->id }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/news/{{ $News->id }}">
                                {{ $News->display }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/news/{{ $News->id }}">
                                {{ $News->updated_at }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/news/{{ $News->id }}">
                                {{ $News->created_at }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/news/{{ $News->id }}">
                                {{ $News->newsdate }}
                            </a>
                        </td>
                        <td> {{ $News->type }}</td>
                        <td>
                            <a href="/final_project/public/news/{{ $News->id }}">
                                {{ $News->title }}
                            </a>
                        </td>
                        <td> {{ $News->ndesc }}</td>
                        <td> {{ $News->visits }}</td>
                        <td><a href = "/final_project/public/news/{{ $News->id }}/edit">edit</a></td>
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

