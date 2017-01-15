@extends('layout/layout')

@section('title')
    Gbata
@endsection

@section('content')

    <!-- gros formulaire de recherche -->
    <div class="search-box" id="search-box">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 search-box-padding">
                    <div class="search-box-text">
                        <span>Le meilleur logement pour votre budget en un temps record</span>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            {!! Form::open(array('route' => 'search')) !!}
                                <div class="row search-box-form">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::select('commune',array(
                                            'yopougon' => 'Yopougon',
                                            'abobo' => 'Abobo',
                                            'adjame' => 'Adjame',
                                            'plateau' => 'Plateau',
                                            'cocody' => 'Cocody',
                                            'treichville' => 'Treicheville',
                                            'koumassi' => 'Koumassi',
                                            'marcory' => 'Marcory',
                                            'atecoube' => 'AtteCoubé',
                                            'portboue' => 'Port Bouet',
                                            ),null, ['class' => 'form-control', 'placeholder' => 'Selectionner une commune ...'])
                                        !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::number('piece', null, ['class' => 'form-control', 'placeholder' => 'Nombre de pièce', 'min' =>'0']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::select('type_offer',array(
                                                'location' => 'Location',
                                                'vente' => 'Vente',
                                                ),null, ['class' => 'form-control', 'placeholder' => 'Selectionner le type d\'annonce ...'])
                                            !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::number('budget', null, ['class' => 'form-control', 'placeholder' => 'Budget Maximal', 'min' =>'0']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-4">
                                        {!! Form::button('Je recherche un bien immobillier', ['type' => 'submit', 'class' => 'search-box-button']) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- avantage -->
    <div class="container search-box-padding">
        <div class="row">
            <div class="col-sm-12 text-center rubrique-title">
                <span>Avantages</span>
            </div>
            <div class="col-sm-4 col-sm-offset-4 text-center"><br>
                <i class="rubrique-icon fa fa-home" aria-hidden="true"></i>
                <div class="bar"></div>
            </div>

        </div>
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
                    <i style="font-size: 9em; color: #2185D0;" class="fa fa-mobile" aria-hidden="true"></i>
                </div>
                <div style="color: #494C4F; font-size: 2em; font-weight: bold; line-height: 1;">
                    Recevez les offres en temps réel
                </div>
                <div class="text-center" style="padding: 10px;">
                    Avec le service SMS GBATA, vous recevez les offres par SMS et vous pouvez aussi consulter les offres en fonction de votre commune, ville ou budget.
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

    <!-- trouver un bien immobilier -->
    <br>
    <div class="block-blue">
        <div class="container">
            <div class="col-sm-12 search-box-padding">
                <div class="block-blue-text">
                    <span style="font-weight: bold; font-size: 4em;">Besoin d'un bien immobilier ?</span>
                </div>

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
                    <br><br><br><br>
                </div>

            </div>
        </div>
    </div>


    <!-- proprietaire -->
    <br><br>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 text-center rubrique-title">
                <span>Proprietaires ?</span>
            </div>
            <div class="col-sm-4 col-sm-offset-4 text-center"><br>
                <i class="rubrique-icon fa fa-home" aria-hidden="true"></i>
                <div class="bar"></div>
            </div>

            <div class="col-sm-12 text-center">
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