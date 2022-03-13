@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgawards">

<br><br><br>

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')

        <div class="row">
            <div class="col-md-12">
                <h1>{{ $Awards->title }}</h1>
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td>{{ $Awards->title }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $Awards->cat }}</td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>
                            <img src="{{ $Awards->photo }}" />
                        </td>
                    </tr>
                    <tr>
                        <th>date_received</th>
                        <td>
                            {{ $Awards->date_received }}
                        </td>
                    </tr>
                    <tr>
                        <th>Winners (personel)</th>
                        <td>
                            {{ $Awards->personel }}
                        </td>
                    </tr>
                    <tr>
                        <th>Winners' IDs</th>
                    <td>
                    @foreach($Profile as $User)
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
                    @endforeach</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>
                            {{ $Awards->adesc }}
                        </td>
                    </tr>
                    <tr>
                        <th>Commentary</th>
                        <td>
                            {{ $Awards->commentary }}
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</body>
@endsection