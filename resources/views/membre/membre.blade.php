@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="#">CATEGORIES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    ROCK
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">ROCK 4TPS </a>
                    <a class="dropdown-item" href="#">ROCK 6TPS</a>
                    <a class="dropdown-item" href="#">ROCK SWING</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    VALSE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">VALSE</a>
                    <a class="dropdown-item" href="#">VALSE LENTE</a>
                </div>
            </li>
            {{-- <li class="nav-item active">
                <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="#">CHACHA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1">TANGO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1">PASODOBLE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1">FOXTROT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1">RUMBA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1">SALSA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1">SAMBA</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <h1>NOS DERNIERE VIDEO</h1>
    <div class="row">
        @foreach ( $dances as $dance )


        <div class="col-md-6 ">
            <div class="card">
                <h5>{{ $dance->categories }}</h5>
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="./storage/{{$dance->videos}}" frameborder="0"
                            allowfullscreen></iframe>
                    </div>

                </div><!-- card image -->

                <div class="card-content">
                    <span class="card-title">points clef : <span style="color:red;">{{ $dance->points_clef }}</span></span>
                    <br>
                    <span style="color:aqua;">poster le : {{ $dance->created_at }}</span>

                </div><!-- card content -->


            </div>
        </div>
        @endforeach
    </div>

    @endsection
