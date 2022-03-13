@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgawards">

<br><br><br>

<div class="container">
    <h1>{{ $title }}</h1>
    <p><a href="/final_project/public/awards/create">Create an Award</a></p>
    
    @include('components.validationErrorMessage')

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>display</th>
                    <th>title</th>
                    <th>photo</th>
                    <th>winners</th>
                    <th>links to the winners</th>
                    <th>date received</th>
                    <th>edit</th>
                </tr>
                @foreach($AwardsPaginate as $Awards)
                    <tr>
                        <td>
                            <a href="/final_project/public/awards/{{ $Awards->id }}">
                                {{ $Awards->id }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/awards/{{ $Awards->id }}">
                                {{ $Awards->display }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/awards/{{ $Awards->id }}">
                                {{ $Awards->title }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/awards/{{ $Awards->id }}">
                                <img src="{{ $Awards->photo }}" />
                            </a>
                        </td>
                        <td> {{ $Awards->personel }}</td>
                    <td>
                    <div>@foreach($Profile as $User)
                    @if($User->id == $Awards->given_to_1)<a href="/final_project/public/user/profile/{{ $User->id }}">{{ $Awards->given_to_1  }}</a>@endif
                    @if($User->id == $Awards->given_to_2)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_2  }}</a>@endif
                    @if($User->id == $Awards->given_to_3)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_3  }}</a>@endif
                    @if($User->id == $Awards->given_to_4)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_4  }}</a>@endif
                    @if($User->id == $Awards->given_to_5)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_5  }}</a>@endif
                    @if($User->id == $Awards->given_to_6)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_6  }}</a>@endif
                    @if($User->id == $Awards->given_to_7)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_7  }}</a>@endif
                    @if($User->id == $Awards->given_to_8)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_8  }}</a>@endif
                    @if($User->id == $Awards->given_to_9)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_9  }}</a>@endif
                    @if($User->id == $Awards->given_to_10)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_10  }}</a>@endif
                    @if($User->id == $Awards->given_to_11)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_11  }}</a>@endif
                    @if($User->id == $Awards->given_to_12)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Awards->given_to_12  }}</a>@endif
                    @endforeach</div></td>
                        <td> {{ $Awards->date_received }}</td>
                        <td><a href = "/final_project/public/awards/{{ $Awards->id }}/edit">edit</a></td>
                    </tr>
                @endforeach
            </table>

            {{-- Paginate button --}}
            {{ $AwardsPaginate->links() }}
        </div>
    </div>
</div>
</body>
@endsection

