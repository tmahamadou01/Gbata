@extends('layout/layout')

@section('title')
    Liste des Offres
@endsection

@section('content')

    <div class="container search-box-padding" style="">
        <br><br><br><br><br><br><br>
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Annonce</a></li>
                        <li class="active">Liste</li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-12">
                <div id="list-page-search-box">
                    {!! Form::open(array('route' => 'search')) !!}
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="row">
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
                                            'portbouet' => 'Port Bouet',
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
                            </div>
                        </div>
                        <div class="col-sm-2"><br>
                            {!! Form::button('<i class="fa fa-search" aria-hidden="true"></i> Rechercher', ['type' => 'submit', 'class' => 'search-box-button']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
                <br>
            </div>

            <div class="col-sm-9 text-justify">
                <div class="row">
                    @if (count($offers) === 0)
                        <div class="col-sm-12">
                            <div class="search_resultats_list">
                                <div class="message_not_offer">
                                    <p class="message_not_offer_content">
                                        Nous n'avons pas trouvé d'annonce<br> correspondant exactement à vos critères.
                                    </p>
                                    <hr>
                                </div>
                            </div>
                            Aucune offre disponible pour votre recherche {{$query}}
                        </div>
                    @elseif (count($offers) >= 1)
                    @foreach($offers as $offer)

                    <div class="col-sm-6">

                        <!-- une offre -->

                        <div class="offre-block">
                            <div class="offre-img-block">
                                <img src="{{ asset('offers_img/'.$offer->image2) }}" class="offre-img" alt="">

                                <div class="block-noir">
                                    @if($offer->type_offers_id == 'location')
                                        Location
                                    @else
                                        Vente
                                    @endif
                                </div>
                                <div class="block-prix">
                                    @if($offer->type_offers_id == 'location')
                                        {{$offer->loyer}} Fr / mois
                                    @else
                                        {{$offer->loyer}} Fr
                                    @endif
                                </div>
                                <div class="block-favorite"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="offre-name">
                                <span class="name">{{$offer->titre}}</span>
                                <span class="city-name">{{$offer->commune}} / {{$offer->zone}}</span>
                                <div class="row">
                                    <div class="col-sm-6" style="margin-top: 5px;">
                                        <span style="font-size: 14px; font-weight: bold;">{{$offer->type_maison}}</span>
                                    </div>
                                    <div class="col-sm-6 text-right" style="margin-top: 5px;">
                                        <a class="detail-button" href="{{ route('detail_offer', $offer->id) }}">Details &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div style="padding: 0; border-bottom: 1px solid #dddddd;"></div>
                            <div class="row" style="font-size: 12px; color: #9d9d9d; padding: 5px;">
                                <div class="col-sm-6" style="margin-top: 5px;">
                                    <span><i class="fa fa-user" aria-hidden="true"></i> allhasco</span>
                                </div>
                                <div class="col-sm-6 text-right" style="margin-top: 5px;">
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> {{date('d M Y à H:i:s' , strtotime($offer->created_at))}}</span>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- fin d'une offre -->

                    </div>
                    @endforeach
                    {{--<div class="col-sm-6">--}}

                        {{--<!-- une offre -->--}}

                        {{--<div class="offre-block">--}}
                            {{--<div class="offre-img-block">--}}
                                {{--<img src="{{ asset('img/villa_3.jpg') }}" class="offre-img" alt="">--}}
                                {{--<div class="block-vert">Villa</div>--}}
                                {{--<div class="block-noir">à vendre</div>--}}
                                {{--<div class="block-prix">150000 F / moi</div>--}}
                                {{--<div class="block-favorite"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>--}}
                            {{--</div>--}}
                            {{--<div class="offre-name">--}}
                                {{--<span class="name">Appartement Open Source 404</span>--}}
                                {{--<span class="city-name">Yopougon / Annanerai</span>--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-6" style="margin-top: 5px;">--}}
                                        {{--<span style="font-size: 14px; font-weight: bold;">Appartement</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-sm-6 text-right" style="margin-top: 5px;">--}}
                                        {{--<a class="detail-button" href="">Details &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<br>--}}
                            {{--</div>--}}
                            {{--<div style="padding: 0; border-bottom: 1px solid #dddddd;"></div>--}}
                            {{--<div class="row" style="font-size: 12px; color: #9d9d9d; padding: 5px;">--}}
                                {{--<div class="col-sm-6" style="margin-top: 5px;">--}}
                                    {{--<span><i class="fa fa-user" aria-hidden="true"></i> allhasco</span>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6 text-right" style="margin-top: 5px;">--}}
                                    {{--<span><i class="fa fa-calendar" aria-hidden="true"></i> 20 / 10 / 2016</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<br>--}}
                        {{--<!-- fin d'une offre -->--}}

                    {{--</div>--}}
                    @endif

                </div>
                {{$offers->links()}}

            </div>

            <div class="col-sm-3 text-justify">


                <div class="sidebar-offre">

                    <div class="agence">
                        <span>KôKôTi Home Agency</span>
                        <hr>
                        <div class="agence_logo">
                            <img src="{{ asset('img/logoagence.bmp') }}" width="200" height="150" alt="">
                        </div>
                        <div class="service_agence">
                            <ul>
                                <li><a href="{{ route('offers.create') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Ajouter un bien</a></li>
                                <li><a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Lister mes biens</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <br><br><br>

@endsection