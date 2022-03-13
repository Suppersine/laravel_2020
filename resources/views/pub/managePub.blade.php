@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgpub">

<br><br><br>

<div class="container">
    <h1>{{ $title }}</h1>
    <p><a href="/final_project/public/pub/create">Publish a paper</a></p>

    @include('components.validationErrorMessage')

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>display</th>
                    <th>title</th>
                    <th>Category / Discipline / Keywords</th>
                    <th>authors</th>
                    <th>links to the authors</th>
                    <th>date published</th>
                    <th>edit</th>
                </tr>
                @foreach($PubPaginate as $Pub)
                    <tr>
                        <td>
                            <a href="/final_project/public/pub/{{ $Pub->id }}">
                                {{ $Pub->id }}
                            </a>
                        </td>
                            
                        <td>
                            <a href="/final_project/public/pub/{{ $Pub->id }}">
                                {{ $Pub->display }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/pub/{{ $Pub->id }}">
                                {{ $Pub->title }}
                            </a>
                        </td>
                        <td> {{ $Pub->cat }} </td>
                        <td> {{ $Pub->personel }}</td>
                    <td>
                    <div>@foreach($Profile as $User)
                    @if($User->id == $Pub->written_by_1)<a href="/final_project/public/user/profile/{{ $User->id }}">{{ $Pub->written_by_1  }}</a>@endif
                    @if($User->id == $Pub->written_by_2)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_2  }}</a>@endif
                    @if($User->id == $Pub->written_by_3)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_3  }}</a>@endif
                    @if($User->id == $Pub->written_by_4)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_4  }}</a>@endif
                    @if($User->id == $Pub->written_by_5)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_5  }}</a>@endif
                    @if($User->id == $Pub->written_by_6)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_6  }}</a>@endif
                    @if($User->id == $Pub->written_by_7)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_7  }}</a>@endif
                    @if($User->id == $Pub->written_by_8)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_8  }}</a>@endif
                    @if($User->id == $Pub->written_by_9)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_9  }}</a>@endif
                    @if($User->id == $Pub->written_by_10)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_10  }}</a>@endif
                    @if($User->id == $Pub->written_by_11)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_11  }}</a>@endif
                    @if($User->id == $Pub->written_by_12)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Pub->written_by_12  }}</a>@endif
                    @endforeach</div></td>
                        <td> {{ $Pub->date_pub }}</td>
                        <td><a href = "/final_project/public/pub/{{ $Pub->id }}/edit">edit</a></td>
                    </tr>
                @endforeach
            </table>

            {{-- Paginate button --}}
            {{ $PubPaginate->links() }}
        </div>
    </div>
</div>
</body>
@endsection

