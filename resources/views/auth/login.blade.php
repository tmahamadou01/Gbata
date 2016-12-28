@extends('layout.layout')

@section('title')
    Connexion
@endsection

@section('content')

    <!-- container -->

    <div class="row" id="connexion-page-background">

        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="margin-top: 7em;">

            <div class="form-message">
                Vous devez vous inscrire avant de pouvoir le faire ! &nbsp;&nbsp;&nbsp; <i id="close" class="fa fa-times" aria-hidden="true"></i>
            </div>


            <div class="form-content">
                <form role="form" method="POST" action="{{ url('/login') }}">
                    <!-- message d'erreur enfin je pense hien -->
                        {{ csrf_field() }}
                    <!-- end message d'erreur -->

                    @include('partials.flash')
                    
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">+225</div>
                            <input id="mobile" type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" required autofocus>
                        </div>
                        @if ($errors->has('mobile'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">&nbsp;&nbsp;<i class="fa fa-key" aria-hidden="true"></i>&nbsp;&nbsp;</div>
                            <input id="password" type="password" class="form-control" name="password" required><a class="mp-perdu" href="{{ url('/password/reset') }}">Perdu ?</a>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
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
                Pas encore de compte ? <a href="{{ route('register') }}">inscrivez vous ici</a>
            </div>
            <br><br>
        </div>
        <div class="col-sm-4"></div>
    </div>

@endsection

@section('js_script')
    $('#close').click(function(){
        $('.form-message').fadeOut("slow");
    });
@endsection
