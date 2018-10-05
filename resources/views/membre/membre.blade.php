@extends('layouts.app')

@section('content')
    {{-- <img src="{{ asset('img/Tango.jpg') }}" alt="image-background-membre"> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>hello</h1>
            <ul>
            @foreach($dances as $dance )
                <li style="text-align:left;"> -{{$dance->groupes}}  -type de dance :   {{ $dance->categories}}
                     -video : {{ $dance->videos }}
                     -Points clef :   {{ $dance->points_clef}}
                </li><br>
            @endforeach
            </ul>
            <nav class="nav navbar-brand">

                    <li>{{$dance->groupes}}</li>
                    <ul style="display:flex; justify-content:space-betwen;">
                    @foreach ($dances as $dance)
                    <li style="font-weight:400;padding:10px;list-style:none;border-right:1px solid white;">{{ $dance->categories  }}</li>
                    @endforeach


                </ul>
            </nav>


            </div>
            @foreach($dances as $dance )
            <p>{{ $dance }}</p>
            @endforeach
        </div>
    </div>


@endsection
