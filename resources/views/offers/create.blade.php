@extends('layout/layout')

@section('title')
    Ajouter une Offre
@endsection

@section('content')

    <div class="container" style="margin-top: 6.5em;">

        {{ Form::open() }}

        {{ Form::close() }}

        <div class="row">
            <div class="col-sm-3 text-justify">

                <!-- sidebar -->

                <div class="sidebar-offre">

                    <div class="agence">
                        <span>KôKôTi Home Agency</span>
                        <hr>
                        <div class="agence_logo">
                            <img src="{{ asset('img/logoagence.bmp') }}" width="200" height="150" alt="">
                        </div>
                        <div class="service_agence">
                            <ul>
                                <li><a href="{{ route('offers.store') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Ajouter un bien</a></li>
                                <li><a href=""><i class="fa fa-caret-right" aria-hidden="true"></i> Lister mes biens</a></li>
                            </ul>
                        </div>
                    </div>

                    <br><br>
                    <div class="recherche">

                        <span>Trouver votre bien immobilier</span>
                        <hr>
                        <form action="">
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
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">Nombre de pièces ...</option>
                                    <?php for($j=1; $j<7; $j++){ ?>
                                    <option value=""><?= $j; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="">Type d'offre ...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Budget maximum ...">
                            </div>
                            <button class="search-box-button">
                                Rechercher
                            </button>
                        </form>
                    </div>

                    <!--<div class="associe">
                        <hr>
                        <div>
                            <div class="offre-img-block">
                                <img src="{{-- asset('img/mg_2381.jpg') --}}" class="offre-img" alt="">
                                <div class="block-vert">Villa</div>
                                <div class="block-noir">à vendre</div>
                                <div class="block-prix">150000 F / moi</div>
                                <div class="block-favorite"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>-->
                </div>

                <!-- sidebar -->

            </div>
            <div class="col-sm-9 text-justify">

                <div class="row">

                    <div class="col-sm-12">

                        <div class="add-offer-form">

                            @include('partials.flash')

                            {!! Form::open(array('route' => 'offers.store', 'enctype' => "multipart/form-data")) !!}

                                <div class="form-group">
                                    {!! Form::label('titre', 'Titre de l\'annonce') !!}
                                    {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'ex. Appartement du 75']) !!}
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('commune', 'Commune') !!}
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
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('zone', 'zone') !!}
                                            {!! Form::text('zone', null, ['class' => 'form-control', 'placeholder' => 'ex. paillet']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('type_maison', 'Type de maison') !!}
                                            {!! Form::text('type_maison', null, ['class' => 'form-control', 'placeholder' => 'ex. studio']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::label('piece', 'Nombre de pièces') !!}
                                            {!! Form::number('piece', null, ['class' => 'form-control', 'placeholder' => 'ex. 5']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('loyer', 'Coût du loyer') !!}
                                            {!! Form::number('loyer', null, ['class' => 'form-control', 'placeholder' => 'ex. 40000']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('caution', 'Caution') !!}
                                            {!! Form::number('caution', null, ['class' => 'form-control', 'placeholder' => 'ex. 8']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('contact', 'Contact') !!}
                                            {!! Form::number('contact', null, ['class' => 'form-control', 'placeholder' => 'ex. 07070707']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::label('plus_information', 'Plus d\'information') !!}
                                            {!! Form::text('plus_information', null, ['id' => 'divers']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            {!! Form::label('description', 'Description') !!}
                                            {!! Form::textarea('description') !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('image1', 'Image 1') !!}
                                            {!! Form::file('image1', ['class' => 'btn btn-block btn-default']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('image2', 'Image 2') !!}
                                            {!! Form::file('image2', ['class' => 'btn btn-block btn-default']) !!}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            {!! Form::label('image3', 'Image 3') !!}
                                            {!! Form::file('image3', ['class' => 'btn btn-block btn-default']) !!}
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-2 col-sm-offset-5">
                                        <div class="form-group">
                                            {!! Form::button('Create', ['type' => 'submit', 'class' => 'search-box-button']) !!}
                                        </div>
                                    </div>
                                </div>

                            {!! Form::close() !!}

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <br><br><br>

@endsection
