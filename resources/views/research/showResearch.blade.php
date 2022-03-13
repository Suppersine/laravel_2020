@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgrsc">

    @if(session()->has('user_id'))
    <br><br><br><br><br><br>
    @else
    <br><br><br>
    @endif

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')

        <div class="row">
            <div class="col-md-12">
                <p>here, we store some notable examples of academic papers whose templates should be followed</p>
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td>{{ $Research->title }}</td>
                    </tr>
                    <tr>
                        <th>Date Published</th>
                        <td>
                            {{ $Research->date_pub }}
                        </td>
                    </tr>
                    <tr>
                        <th>Authors</th>
                        <td>
                            {{ $Research->personel }}
                        </td>
                    </tr>
                    <tr>
                        <th>Authors' IDs</th>
                    <td>
                    @foreach($Profile as $User)
                    @if($User->id == $Research->written_by_1)<a href="/final_project/public/user/profile/{{ $User->id }}">{{ $Research->written_by_1  }}</a>@endif
                    @if($User->id == $Research->written_by_2)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_2  }}</a>@endif
                    @if($User->id == $Research->written_by_3)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_3  }}</a>@endif
                    @if($User->id == $Research->written_by_4)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_4  }}</a>@endif
                    @if($User->id == $Research->written_by_5)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_5  }}</a>@endif
                    @if($User->id == $Research->written_by_6)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_6  }}</a>@endif
                    @if($User->id == $Research->written_by_7)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_7  }}</a>@endif
                    @if($User->id == $Research->written_by_8)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_8  }}</a>@endif
                    @if($User->id == $Research->written_by_9)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_9  }}</a>@endif
                    @if($User->id == $Research->written_by_10)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_10  }}</a>@endif
                    @if($User->id == $Research->written_by_11)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_11  }}</a>@endif
                    @if($User->id == $Research->written_by_12)<a href="/final_project/public/user/profile/{{ $User->id }}">, {{ $Research->written_by_12  }}</a>@endif
                    @endforeach</td>
                    </tr>
                    <tr>
                        <th>Abstract</th>
                        <td>
                            {{ $Research->abstract }}
                        </td>
                    </tr>
                    <tr>
                        <th>Introduction</th>
                        <td>
                            {{ $Research->intro }}
                        </td>
                    </tr>
                    <tr>
                        <th>Methods</th>
                        <td>
                            {{ $Research->methods }}
                        </td>
                    </tr>
                    <tr>
                        <th>Results & Discussion</th>
                        <td>
                            {{ $Research->result_discn }}
                        </td>
                    </tr>
                    <tr>
                        <th>Conclusion</th>
                        <td>
                            {{ $Research->conclusions }}
                        </td>
                    </tr>
                    <tr>
                        <th>References</th>
                        <td>
                            {{ $Research->refren }}
                        </td>
                    </tr>
                    <tr>
                        <th>Links</th>
                        <td>
                            {{ $Research->linkz }}
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</body>
@endsection