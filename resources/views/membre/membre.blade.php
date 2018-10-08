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
                     <img src="/storage{{$dance->videos}}" alt="">
                </li><br>
            @endforeach
            </ul>
            <nav class="nav navbar-brand">


                    <ul style="display:flex; justify-content:space-betwen;">
                    @foreach ($dances as $dance)
                    <li style="font-weight:400;padding:10px;list-style:none;border-right:1px solid white;">{{ $dance->categories  }}</li>
                    <li><img src="/storage{{$dance->videos}}" alt=""></li>
                    @endforeach


                </ul>
            </nav>


            </div>





        </div>
    </div>


@endsection
