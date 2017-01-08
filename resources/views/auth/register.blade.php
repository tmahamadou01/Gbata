@extends('layout.layout')

@section('title')
    Inscription
@endsection

@section('content')

    <!-- container -->
<div class="container-fluid">
    <div class="row" id="register-page-background">
        <br><br><br><br><br><br><br>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-5">
                    <div class="grace-a-gbata">
                        Grâce à votre compte <strong>GBATA</strong> :
                    </div>

                    <div class="block">
                        <div class="icone">
                            <img src="{{ asset('img/icon-ringer-alarm-sound.png') }}" alt="">

                            <span class="title">Gérer</span> <br>
                            vos alertes e-mails <br>
                            en toute simplicité !
                        </div>
                    </div>

                    <div class="block">
                        <div class="icone">
                            <img src="{{ asset('img/icon-star-favorite-rating.png') }}" alt="">

                            <span class="title">Enregistrer</span> <br>
                            vos annonces favorites pour <br>
                            les retrouver rapidement !
                        </div>
                    </div>

                    <div class="block">
                        <div class="icone">
                            <img src="{{ asset('img/icon-chat-message-comment-bubble.png') }}" alt="">

                            <span class="title">Retrouver</span> <br>
                            l'historique des messages envoyés <br>
                            aux propriétaires pour <br>
                            ne pas perdre le fil !
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="connexion-block text-center">
                        <div class="title">
                            Je me crée <strong>mon compte personnel</strong>
                        </div>
                        <br>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">

                            {{ csrf_field() }}

                            @include('partials.flash')

                            <div class="form-group">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nom ..." required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Prenom ..." required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail ..." required>

                                @if ($errors->has('email'))
                                    <span>
                                        <ul class="basic_error"><li>{{ $errors->first('email') }}</li></ul>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Numero de téléphone ..." required>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe ..." required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confimez le mot de passe" required>
                            </div>

                            <div class="form-group">
                                <button class="validate" type="submit">
                                    Créer mon compte
                                </button>
                            </div>
                        </form>
                        <a href="{{ route('login') }}">J'ai déjà un compte personnel ?</a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>

    </div>
</div>


@endsection

@section('js_script')
    $('#close').click(function(){
    $('.form-message').fadeOut("slow");
    });
@endsection
