@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgprof">

@if(session()->has('user_id'))
<br><br><br>
@endif

<div class="container">
    <h1>{{ $title }}</h1>
    <h4>Select whom to be shown below:</h4>
    <p class="bhead"><a href="/final_project/public/user/profile">All</a> | <a href="/final_project/public/user/profile/faculty">Faculty, Academics & Staff</a> | <a href="/final_project/public/user/profile/postgrad">Postgraduates</a> | <a href="/final_project/public/user/profile/undergrad">Undergraduates</a> | <a href="/final_project/public/user/profile/alumni-p">Postgraduate Alumni</a> | <a href="/final_project/public/user/profile/alumni-u">Undergraduate Alumni</a>
    </p>
        @include('components.validationErrorMessage')

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>photo</th>
                    <th>email</th>
                    <th>position</th>
                    <th>organisation</th>
                </tr>
                @foreach($ProfilePaginate as $User)
                    <tr>
                        <td>
                            <a href="/final_project/public/user/profile/{{ $User->id }}">
                                {{ $User->id }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/user/profile/{{ $User->id }}">
                                {{ $User->name }}
                            </a>
                        </td>
                        <td>
                            <a href="/final_project/public/user/profile/{{ $User->id }}">
                                <img src="{{ $User->photo }}" />
                            </a>
                        </td>
                        <td> {{ $User->email }}</td>
                        <td>
                            @if($User->position == 'FA')<p>Faculty, Academic & Staff</p>
                            @elseif($User->position == 'PG')<p>Postgraduate Student</p>
                            @elseif($User->position == 'UG')<p>Undergraduate Student</p>
                            @elseif($User->position == 'AU')<p>Undergraduate Alumnus</p>
                            @elseif($User->position == 'AG')<p>Postgraduate Alumnus</p>
                            @else<p>Guest</p>
                            @endif
                        </td>
                        <td> {{ $User->organisation }}</td>
                    </tr>
                @endforeach
            </table>

            {{-- Paginate button --}}
            {{ $ProfilePaginate->links() }}
        </div>
    </div>
</div>
</body>
@endsection