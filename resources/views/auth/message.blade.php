@extends('layout.layout')

@section('title')
    Bienvenue sur GBATA
@endsection

@section('content')

    <!-- container -->
    <div class="container-fluid">
        <div class="row" id="connexion-page-background">
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
                        </div><br><br>
                    </div>
                    <div class="col-sm-7">
                        <div class="alert alert-success" role="alert">
                            <strong>Bienvenue sur GBATA.</strong> Votre inscription s'est effectuée avec succès.
                        </div>
                        <div class="alert alert-info" role="alert">
                            Un mail de confirmation vous a été envoyé.
                            Veuillez confirmer votre compte GBATA. <br>
                            Avec GBATA vous pouvez recevoir toutes les offres immobillières partout en Côte d'Ivoire et en fonction de votre budget.
                        </div>
                        <a href="{{ route('accueil') }}">Retour à l'accueil</a>

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
