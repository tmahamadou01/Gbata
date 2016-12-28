@extends('layout.layout')

@section('title')
    Inscription
@endsection

@section('content')

    <!-- container -->
    <div class="row" id="connexion-page-background">

        <div class="col-sm-3"></div>
        <div class="col-sm-6">

            <div class="register-form-logo">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At atque corporis eligendi enim illo, illum ipsum officiis placeat quaerat reprehenderit! Accusamus, atque in ipsam iusto maiores molestiae possimus repellendus repudiandae.
            </div>


            <div class="register-form-content">
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
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail ..." required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">+225</div>
                                    <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Numero de téléphone ..." required>

                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
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
                        <button class="connexion-button" type="submit">
                            Créer mon compte
                        </button>
                    </div>
                </form>
            </div>

            <br><br><br>
        </div>
        <div class="col-sm-3"></div>

    </div>

@endsection

@section('js_script')
    $('#close').click(function(){
    $('.form-message').fadeOut("slow");
    });
@endsection
