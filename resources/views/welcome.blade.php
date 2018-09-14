
@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            <img id="bg-welcome"src="{{ asset('img.bg-welcome.jpg') }}" alt="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">accueil</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="{{asset('img/titre.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <h1>COURS DE DANCE</h1>
        </div>
@endsection
