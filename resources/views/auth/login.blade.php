@extends('layout.layout')

@section('title')
    Connexion
@endsection

@section('content')

    <!-- container -->

    <div class="row" id="connexion-page-background">

        <div class="col-sm-4"></div>
        <div class="col-sm-4">

            <div class="form-logo">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>

            <div class="form-message">
                Vous devez vous inscrire avant de pouvoir le faire ! &nbsp;&nbsp;&nbsp; <i id="close" class="fa fa-times" aria-hidden="true"></i>
            </div>


            <div class="form-content">
                <form role="form" method="POST" action="{{ url('/login') }}">
                    <!-- message d'erreur enfin je pense hien -->
                        {{ csrf_field() }}
                    <!-- end message d'erreur -->
                    
                    <div class="form-group">
                        <div class="input-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                            <div class="input-group-addon">+225</div>
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="Numero de téléphone" autofocus />
                        </div>
                        @if ($errors->has('numero'))
                            <span class="help-block">
                                <strong style="color: red;">Numero invalide</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group-addon">&nbsp;&nbsp;<i class="fa fa-key" aria-hidden="true"></i>&nbsp;&nbsp;</div>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" /><a class="mp-perdu" href="{{ url('/password/reset') }}">Perdu ?</a>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong style="color: red;">Mot de passe invalide</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group text-left">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Se souvenir de moi
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="connexion-button" type="submit">
                            Connexion
                        </button>
                    </div>
                </form>
            </div>

            <div class="form-register">
                Pas encore de compte ? <a href="">inscrivez vous ici</a>
            </div>
            <br><br><br>
        </div>
        <div class="col-sm-4"></div>

    </div>

@endsection

@section('js_script')
    $('#close').click(function(){
        $('.form-message').fadeOut("slow");
    });
@endsection
