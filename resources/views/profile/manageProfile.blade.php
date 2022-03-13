@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgprof">

<br><br><br>

@if(session()->has('user_id'))
<div class="hidden">
    {{ $user_id = session()->get('user_id') }}
    {{ $user_priv = session()->get('user_priv') }}
</div>
@endif

<div class="container">
    <h1>{{ $title }}</h1>
    @if($user_priv == 'A')
    <p><a href="/final_project/public/user/profile/create">Create a new user profile (as admin)</a></p>
    @endif

    @include('components.validationErrorMessage')

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>display</th>
                    <th>name</th>
                    <th>photo</th>
                    <th>organisation</th>
                    <th>email</th>
                    <th>telephone</th>
                    <th>priv</th>
                    <th>position</th>
                    <th>edit</th>
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
                                {{ $User->display }}
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
                        <td> {{ $User->organisation }}</td>
                        <td> {{ $User->email }}</td>
                        <td> {{ $User->telephone }}</td>
                        <td> {{ $User->priv }}</td>
                        <td> {{ $User->position }}</td>
                        <td>@if(($user_priv == 'A') && ($User->id != $user_id))
                            <a href = "/final_project/public/user/profile/{{ $User->id }}/edit_a">edit</a><br>
                            <a style="color: tan" href = "/final_project/public/user/profile/{{ $User->id }}/changepw">change password</a>
                            <!-- By default, the change password button shoud be turned off, unless requested by a user via email -->
                            @endif
                            @if($User->id==$user_id)
                            <a href = "/final_project/public/user/profile/{{ $User->id }}/edit_g">*EDIT*</a>
                            <a href = "/final_project/public/user/profile/{{ $User->id }}/changepw">*CHANGE PASSWORD*</a>
                            @endif
                        </td>
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

