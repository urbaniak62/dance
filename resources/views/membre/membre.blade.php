@extends('layouts.app')

@section('content')
    {{-- <img src="{{ asset('img/Tango.jpg') }}" alt="image-background-membre"> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>hello</h1>
            <ul>
            @foreach($dances as $dance )
                <li>{{$dance->categories}}  {{ $dance->groupes}} {{ $dance->points_clef }} {{ $dance->videos }} </li>

            @endforeach
            </ul>



            </div>
            @foreach($dances as $dance )
            <p>{{ $dance }}</p>
            @endforeach
        </div>
    </div>


@endsection
