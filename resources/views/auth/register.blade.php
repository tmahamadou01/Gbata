@extends('layout.layout')

@section('title')
    Inscription
@endsection

@section('content')

    <!-- container -->
    <div class="container-fluid" id="connexion-page-background">
        <div class="container search-box-padding">
            <div class="row">
                <div class="col-sm-6">
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
                            aux propriétaires pour ne pas perdre le fil !
                        </div>
                    </div><br><br>
                </div>
                <div class="col-sm-6">
                    <div class="connexion-block text-center">
                        <div class="title">
                            Je me crée <strong>mon compte personnel</strong>
                        </div>
                        <br>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">

                            {{ csrf_field() }}

                            @include('partials.flash')

                            <div class="form-group">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nom ..."  autofocus>
                                @if ($errors->has('name'))
                                    <span>
                                        <ul class="basic_error"><li>{{ $errors->first('name') }}</li></ul>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Prenom ..." >

                                @if ($errors->has('lastname'))
                                    <span>
                                        <ul class="basic_error"><li>{{ $errors->first('lastname') }}</li></ul>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail ..." >

                                @if ($errors->has('email'))
                                    <span>
                                        <ul class="basic_error"><li>{{ $errors->first('email') }}</li></ul>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Numero de téléphone ..." >

                                @if ($errors->has('mobile'))
                                    <span>
                                        <ul class="basic_error"><li>{{ $errors->first('mobile') }}</li></ul>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe ..." >

                                @if ($errors->has('password'))
                                    <span>
                                        <ul class="basic_error"><li>{{ $errors->first('password') }}</li></ul>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confimez le mot de passe" >
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
    </div>

@endsection

@section('js_script')
    $('#close').click(function(){
    $('.form-message').fadeOut("slow");
    });
@endsection
