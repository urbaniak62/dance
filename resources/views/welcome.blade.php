
@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            {{-- <img id="bg-welcome"src="{{ asset('img.bg-welcome.jpg') }}" alt=""> --}}
            {{-- <video autoplay="" class="l_o_h"  loop="" playsinline="" poster="https://ak3.picdn.net/shutterstock/videos/25457273/thumb/1.jpg" style="width:100%;background-size:cover;margin:-7% 0 0 0 ;">
                <source src="{{asset('video/video.webm')}}" type="video/webm"> --}}
                {{-- <source src="https://ak3.picdn.net/shutterstock/videos/25457273/preview/stock-footage-emotional-and-graceful-contemporary-dance-performed-by-champions-slow-motion.mp4" type="video/mp4"></video> --}}
            <video autoplay="" class="l_o_h"  loop="" playsinline="" poster="https://ak3.picdn.net/shutterstock/videos/25457273/thumb/1.jpg" style="width:100%;background-size:cover;margin:-7% 0 0 0 ;">
                <source src="{{asset('video/dance1.mp4')}}" type="video/mp4">
            </video>
            @if (Route::has('login'))
                {{-- <div class="top-right links"> --}}
                    @auth
                        <a href="{{ url('/home') }}">accueil</a>
                    @endauth
                {{-- </div> --}}
            @endif
            <div class="container">
                <h1 id="titre">DECLIC DANCE</h1>
            </div>

        </div>
        <div class="container">
            <div class="content mot">
                <h1>LE MOT DU PRESIDENT</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae eligendi, quo eos
                rerum iusto laudantium vel accusantium deserunt nemo repudiandae provident quibusdam
                dolores obcaecati nostrum soluta animi quidem cum corrupti? Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Maiores eaque sequi esse maxime repudiandae natus porro culpa totam magnam nemo velit inventore soluta, a ullam expedita.
                Ut voluptas esse sed.</p>
            </div>
        </div>

@endsection
