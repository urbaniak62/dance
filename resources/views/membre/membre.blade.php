@extends('layouts.app')

@section('content')
    {{-- <img src="{{ asset('img/Tango.jpg') }}" alt="image-background-membre"> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

            <ul>
            @foreach($dances as $dance )
                <li>{{$dance->videos}}</li>
            @endforeach
            </ul>



            </div>
        </div>
    </div>


@endsection
