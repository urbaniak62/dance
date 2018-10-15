@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                    <h1>hello</h1>
                <ul>
                @foreach($dances as $dance )
                    <li style="text-align:left;">
                        <a href="{{$dance->categories}}">  {{ $dance->categories }} </a>
                        <img src="/storage/{{$dance->videos}}" alt="" style="height:200px;width:200px;">
                    </li><br>
                @endforeach
                </ul>
                {{-- @foreach($categories as $categorie )
                    <li style="text-align:left;">
                        <a href="{{$categorie}}">  {{ $categorie }} </a>
                    </li><br>
                @endforeach --}}
                <nav class="nav navbar-brand">
                        <ul style="display:flex; justify-content:space-betwen;">
                        @foreach ($dances as $dance)
                        <li style="font-weight:400;padding:10px;list-style:none;"><a href="{{$dance->categories}}">{{ $dance->categories  }}</a></li>
                        {{-- <li><img src="/storage/{{$dance->videos}}" alt="" style="height:400px;width:400px;object-fit: cover;"></li> --}}
                    @endforeach
                    </ul>
                </nav>
            </div>
            @foreach($dances as $dance )
            {{--  <p>{{ $dance->id }}</p>  --}}
            <div class="media">

                <img src="/storage/{{ $dance->videos }}" alt="" style="height:400px;width:400px;">

            </div>
            @endforeach
            <br>



        </div>
    </div>


@endsection
