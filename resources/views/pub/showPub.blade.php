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
                        <th>Title</th>
                        <td>{{ $Pub->title }}</td>
                    </tr>
                    <tr>
                        <tr>
                            <th>Category / Discipline / Keywords</th>
                            <td>{{ $Pub->cat }}</td>
                        </tr>
                        <th>Date Published</th>
                        <td>
                            {{ $Pub->date_pub }}
                        </td>
                    </tr>
                    <tr>
                        <th>Authors</th>
                        <td>
                            {{ $Pub->personel }}
                        </td>
                    </tr>
                    <tr>
                        <th>Authors' IDs</th>
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
                    </tr>
                    <tr>
                        <th>Abstract</th>
                        <td>
                            {{ $Pub->abstract }}
                        </td>
                    </tr>
                    <tr>
                        <th>Introduction</th>
                        <td>
                            {{ $Pub->intro }}
                        </td>
                    </tr>
                    <tr>
                        <th>Methods</th>
                        <td>
                            {{ $Pub->methods }}
                        </td>
                    </tr>
                    <tr>
                        <th>Results & Discussion</th>
                        <td>
                            {{ $Pub->result_discn }}
                        </td>
                    </tr>
                    <tr>
                        <th>Conclusion</th>
                        <td>
                            {{ $Pub->conclusions }}
                        </td>
                    </tr>
                    <tr>
                        <th>References</th>
                        <td>
                            {{ $Pub->refren }}
                        </td>
                    </tr>
                    <tr>
                        <th>Links</th>
                        <td>
                            {{ $Pub->linkz }}
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</body>
@endsection