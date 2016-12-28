@extends('layout.layout')

@section('content')

    <!-- container -->

    <div class="row" id="connexion-page-background">

        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="margin-top: 7em;">

            <div class="form-content">

                <form class="form-horizontal text-left" role="form" method="POST" action="{{ url('/password/reset') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    @include('partials.flash')


                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} text-left">


                        <div class="col-sm-12">
                            <label for="email" class="control-label">Addresse E-Mail </label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email ..." required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                        <div class="col-md-12">
                            <label for="password" class="control-label">Nouveau mot de passe</label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="mot de passe ..." required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <label for="password-confirm" class="control-label">Confirmmez le mot de passe</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirmation du mot de passe ..." required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="connexion-button">
                                Reinitialiser mon mot de passe
                            </button>
                        </div>
                    </div>


                </form>

            </div>
            <br><br>
        </div>
        <div class="col-sm-4"></div>

    </div>

@endsection
