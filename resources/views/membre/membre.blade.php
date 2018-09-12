@extends('layouts.app')

@section('content')

{{--  <div class="container">  --}}
    <img src="{{ asset('img/Tango.jpg') }}" alt="image-background-membre">
{{--  </div>  --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                {{--  <div class="card">
                    <p>bonjour {{ Auth::user()->name }}</p>
                    <p>Voir nos leçon : </p>
                </div>  --}}
            </div>
        </div>
    </div>


@endsection