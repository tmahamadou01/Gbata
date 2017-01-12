@extends('layout/layout')

@section('title')
    Gbata
@endsection

@section('content')

    <!-- gros formulaire de recherche -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-justify search-box">

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="search-bo">

                            <div class="search-box-text">
                                <span>Le meilleur logement pour votre budget en un temps record</span>
                            </div>
                            <div class="search-box-form">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="">Selectionnez une commune ...</option>
                                                <option value="">Yopougon</option>
                                                <option value="">Abobo</option>
                                                <option value="">Marcory</option>
                                                <option value="">Atte-Coube</option>
                                                <option value="">Plateau</option>
                                                <option value="">Koumassi</option>
                                                <option value="">Port-Bouet</option>
                                                <option value="">Treichville</option>
                                                <option value="">Adjame</option>
                                                <option value="">Cocody</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="">Nombre de pièces ...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="">Type d'offre ...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Budget maximum ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-4">
                                        <button class="search-box-button">
                                            Je recherche un bien immobillier
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>

            </div>
        </div>
    </div>


    <!-- avantage -->
    <br>

    <div class="container">
        <div class="row">

            <div class="col-sm-12 text-center rubrique-title">
                <span>Avantages</span>
            </div>
            <div class="col-sm-4 col-sm-offset-4 text-center"><br>
                <i class="rubrique-icon fa fa-home" aria-hidden="true"></i>
                <div class="bar"></div>
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-center">

                    <div>
                        <i style="font-size: 9em; color: #2185D0;" class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <div style="color: #494C4F; font-size: 2em; font-weight: bold; line-height: 1;">
                        Trouvez la maison idéale
                    </div>
                    <div class="text-center" style="padding: 10px;">
                        Avec les informations fournies, nous vous aidons à trouver la maison qui vous convient le mieux. Nous faisons pour vous l'état des lieux et vous permettons d'apprécier les informations relatives à votre voisinage.
                    </div>

                </div>
                <div class="col-sm-3 text-center">

                    <div>
                        <i style="font-size: 9em; color: #2185D0;" class="fa fa-tachometer" aria-hidden="true"></i>
                    </div>
                    <div style="color: #494C4F; font-size: 2em; font-weight: bold; line-height: 1;">
                        Économisez temps et argent
                    </div>
                    <div class="text-center" style="padding: 10px;">
                        Investissez moins de votre temps et de votre argent à chercher un logement. Plus besoin de payer pour vous faire visiter un nombre illimité de maison qui ne sont pas à votre goût, nous le faisons à votre place.
                    </div>

                </div>
                <div class="col-sm-3 text-center">

                    <div>
                        <i style="font-size: 9em; color: #2185D0;" class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <div style="color: #494C4F; font-size: 2em; font-weight: bold; line-height: 1;">
                        Recherche Facile
                    </div>
                    <div class="text-center" style="padding: 10px;">
                        Nous vous assurons un service fiable. Nous faisons les enquêtes nécessaires pour vous assurer la disponibilité des logements que nous vous proposons.
                    </div>

                </div>
                <div class="col-sm-3 text-center">

                    <div>
                        <i style="font-size: 9em; color: #2185D0;" class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div style="color: #494C4F; font-size: 2em; font-weight: bold; line-height: 1;">
                        Service client 24/7
                    </div>
                    <div class="text-center" style="padding: 10px;">
                        Nous sommes là pour vous aider dans votre recherche.
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- trouver un bien immobilier -->
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 block-blue text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-blue-text">
                            <span style="font-weight: bold; font-size: 4em;">Besoin d'un bien immobilier ?</span>
                        </div>
                        <br>

                        <div class="col-sm-4 col-sm-offset-4 text-center"><br>
                            <i class="rubrique-icon fa fa-home" aria-hidden="true"></i>
                            <div class="bar"></div>
                        </div>

                        <br><br><br>


                        <div class="col-sm-12 text-center">
                        <span style="color: #FFF; font-weight: bold;">
                            Vous cherchez à louer rapidement appartement, maison, studio, chambre ? Contactez-nous et nous nous en chargeons
                        </span>
                            <br><br><br><br>
                            <a href="" class="bien-immobilier-button">
                                Trouver votre bien
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- proprietaire -->

    <div class="container">
        <div class="row">

            <div class="col-sm-12 text-center rubrique-title">
                <span>Proprietaires ?</span>
            </div>
            <div class="col-sm-4 col-sm-offset-4 text-center"><br>
                <i class="rubrique-icon fa fa-home" aria-hidden="true"></i>
                <div class="bar"></div>
            </div>

            <div class="col-sm-12 text-center"><br><br><br>
                <span style="color: #4C4F52; font-size: 2em; font-weight: 700;">
                    Trouvez vite et bien vos locataires
                </span>
                <br><br><br><br>
                <a href="{{route('offers.create')}}" class="proprietaire-immobilier-button">
                    Déposer une offre
                </a>
            </div>

        </div>
        <br><br><br>
    </div>


@endsection