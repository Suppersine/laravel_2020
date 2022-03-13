@extends('layout.master')

@section('title', $title)

@section('content')
<body class="bgprof">

<br><br><br>

    <div class="container">
        <h1>{{ $title }}</h1>

        @include('components.validationErrorMessage')

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $User->name }}</td>
                    </tr>
                    <tr>
                        <th>Site ID#</th>
                        <td>{{ $User->id }}</td>
                    </tr>
                    <tr>
                        <th>Photo</th>
                        <td>
                            <img src="{{ $User->photo }}" />
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            {{ $User->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td>
                            {{ $User->telephone }}
                        </td>
                    </tr>
                    <tr>
                        <th>Organisation</th>
                        <td>
                            {{ $User->organisation }}
                        </td>
                    </tr>
                    <tr>
                        <th>Privilege</th>
                        <td>
                            {{ $User->priv }}
                        </td>
                    </tr>
                    <tr>
                        <th>Position</th>
                        <td>
                            @if($User->position == 'FA')<p>Faculty, Academic & Staff (FA)</p>
                            @elseif($User->position == 'PG')<p>Postgraduate Student (PG)</p>
                            @elseif($User->position == 'UG')<p>Undergraduate Student (UG)</p>
                            @elseif($User->position == 'AU')<p>Undergraduate Alumnus (AU)</p>
                            @elseif($User->position == 'AG')<p>Postgraduate Alumnus (AG)</p>
                            @else<p>Guest</p>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Introduction</th>
                        <td>
                            {{ $User->introduction }}
                        </td>
                    </tr>
                    <tr>
                        <th>Awards</th>
                        <td>
                            {{ $User->awards }}
                        </td>
                    </tr>
                    <tr>
                        <th>Publications</th>
                        <td>
                            {{ $User->publications }}
                        </td>
                    </tr>
                    <tr>
                        <th>Thesis Topic / Research Scope & Interests:</th>
                        <td>
                            {{ $User->thesistopic }}
                        </td>
                    </tr>
                    <tr>
                        <th>Thesis Abstract / Scope Description:</th>
                        <td>
                            {{ $User->thesisabstract }}
                        </td>
                    </tr>
                    <tr>
                        <th>Links to personal awards:</th>
                        <td>@foreach($Awardz as $Awards)
                            @if($Awards->given_to_1 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_2 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_3 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_4 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_5 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_6 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_7 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_8 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_9 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_10 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_11 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                            @if($Awards->given_to_12 == $User->id)<a href="/final_project/public/awards/{{ $Awards->id }}">{{ $Awards->id }},</a>@endif
                        @endforeach</td>
                    </tr>
                    <tr>
                        <th>Links to personal publications:</th>
                        <td>@foreach($Pubz as $Pub)
                            @if($Pub->written_by_1 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_2 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_3 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_4 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_5 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_6 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_7 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_8 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_9 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_10 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_11 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                            @if($Pub->written_by_12 == $User->id)<a href="/final_project/public/pub/{{ $Pub->id }}">{{ $Pub->id }},</a>@endif
                        @endforeach</td>
                    </tr>
                    <tr>
                        <th>Extra internal links to personal awards:</th>
                        <td>
                            {{ $User->linka }}
                        </td>
                    </tr>
                    <tr>
                        <th>Extra internal links to personal publications:</th>
                        <td>
                            {{ $User->linkr }}
                        </td>
                    </tr>
                    <tr>
                        <th>External links involving this person:</th>
                        <td>
                            {{ $User->linkx }}
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</body>
@endsection