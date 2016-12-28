@extends('layout/layout')

@section('title')
    Réinitialiser le mot de passe
@endsection

<!-- Main Content -->
@section('content')

    <!-- container -->

    <div class="row" id="connexion-page-background">

        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="margin-top: 7em;">

            <div class="form-message">
                Envoyez votre email pour réinitialiser le mot de passe &nbsp;&nbsp;&nbsp; <i id="close" class="fa fa-times" aria-hidden="true"></i>
            </div>


            <div class="form-content">

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    @include('partials.flash')

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Addresse E-Mail </label>

                        <div class="col-sm-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email ..." required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="connexion-button">
                                Venvoyer mon adresse mail
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
