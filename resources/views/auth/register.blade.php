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
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Nom ...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Prénom ...">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">+225</div>
                                    <input type="text" class="form-control" name="numero" id="numero" placeholder="Numero de téléphone ..." />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Email ...">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Mot de passe ...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Confirmer le mot de passe ...">
                    </div>

                    <div class="form-group">
                        <button class="connexion-button">
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
