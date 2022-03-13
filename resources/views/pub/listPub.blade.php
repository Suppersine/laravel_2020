@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgpub">

@if(session()->has('user_id'))
<br><br><br>
@endif

<div class="container">
    <h1>{{ $title }}</h1>

    @include('components.validationErrorMessage')

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>title</th>
                    <th>category/discipline</th>
                    <th>authors</th>
                    <th>internal reference</th>
                    <th>date published</th>
                </tr>
                @foreach($PubPaginate as $Pub)
                    <tr>
                        <td>
                            <a href="/final_project/public/pub/{{ $Pub->id }}">
                                {{ $Pub->title }}
                            </a>
                        </td>
                        <td>{{ $Pub->cat }}</td>
                        <td>{{ $Pub->personel }}</td>
                        <td>
                            @foreach($Profile as $User)
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
                        @endforeach</td>
                        <td> {{ $Pub->date_pub }}</td>
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