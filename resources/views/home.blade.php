@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>bienvenue {{ Auth::user()->name }}</p>
                <p>Vous etes inscrit depuis : {{ Auth::user()->created_at->format('d/m/Y   h:i:s')}}</p>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p>Vous etes connecté</p>

                        <a href="{{ url('/membre/membre') }}">
                            <button type="submit" class="btn btn-primary">
                            {{ __(' entrer') }}
                            </button>
                        </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
