@extends('layout.layout')

@section('title')
    Connexion
@endsection

@section('content')

    <!-- container -->
<div class="container-fluid" id="connexion-page-background">
    <div class="container search-box-padding">
        <div class="row">
            <div class="col-sm-6" id="hidden-if-screen-is-sm">
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
                        Je me connecte <strong>à mon compte</strong>
                    </div>
                    <br>
                    <form role="form" method="POST" action="{{ url('/login') }}">

                        <!-- message d'erreur enfin je pense hien -->
                    {{ csrf_field() }}
                    <!-- end message d'erreur -->

                        @include('partials.flash')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">+225</div>
                                        <input id="mobile" type="text" placeholder="Numero de téléphone ..." class="form-control" name="mobile" value="{{ old('mobile') }}" autofocus>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>

                                    @if ($errors->has('mobile'))
                                        <span>
                                            <ul class="basic_error"><li>{{ $errors->first('mobile') }}</li></ul>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">

                                    <input id="password" type="password" placeholder="Mot de passe ..." class="form-control" name="password" >
                                    @if ($errors->has('password'))
                                        <span>
                                            <ul class="basic_error"><li>{{ $errors->first('password') }}</li></ul>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="remember"> Se souvenir de moi
                            </label>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="validate" value="Me Connecter   ">
                        </div>
                    </form>
                    <a href="{{ url('/password/reset') }}">Mot de passe oublié ?</a><br>
                    <a href="{{ route('register') }}">Créer mon compte ?</a>
                </div>
                <br>
            </div>
        </div>
    </div>

</div>

@endsection

