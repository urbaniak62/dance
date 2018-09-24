
@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            {{-- <img id="bg-welcome"src="{{ asset('img.bg-welcome.jpg') }}" alt=""> --}}
            <video autoplay="" class="l_o_h"  loop="" playsinline="" poster="https://ak3.picdn.net/shutterstock/videos/25457273/thumb/1.jpg" style="width:100%;top:0%;left:0%;margin:0px;">
                <source src="{{asset('video/video.webm')}}" type="video/webm">
                {{-- <source src="https://ak3.picdn.net/shutterstock/videos/25457273/preview/stock-footage-emotional-and-graceful-contemporary-dance-performed-by-champions-slow-motion.mp4" type="video/mp4"></video> --}}

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
