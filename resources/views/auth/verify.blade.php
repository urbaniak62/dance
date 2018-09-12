@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifier votre adresse E-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('un lien de verification vous a été envoyer par email.') }}
                        </div>
                    @endif

                    {{ __('consulter votre boite mail et cliquer sur le lien') }}
                    {{ __('Si vous n\'avez rien recu') }}, <a href="{{ route('verification.resend') }}">{{ __('Cliquez ici.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
