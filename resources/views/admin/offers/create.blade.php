@extends('admin.layout.layout')

@section('title')
    add offer
@endsection

@section('css_style')

    <style>
        .prix{
            display: none;
        }
    </style>

@endsection

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-tachometer" aria-hidden="true"></i> Ajouter une annonce
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Annonce</a></li>
                <li class="active"><a href="#">Ajouter</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-12">

                    <div class="add-offer-form">

                        @include('partials.flash')

                        {!! Form::open(array('route' => 'offers.store', 'enctype' => "multipart/form-data")) !!}

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('titre', 'Titre de l\'annonce') !!}
                                    {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'ex. Appartement du 75']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('type_offers_id', 'Type d\'annonce') !!}
                                    {!! Form::select('type_offers_id',array(
                                        'location' => 'Location',
                                        'vente' => 'Vente',
                                        ),null, ['class' => 'form-control home-type', 'placeholder' => 'Selectionner le type d\'annonce ...'])
                                    !!}
                                </div>
                            </div>
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
                                        'portbouet' => 'Port Bouet',
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
                                    {!! Form::label('type_maison', 'Type de bien') !!}
                                    {!! Form::select('type_maison',array(
                                        'studio' => 'studio',
                                        'appartement' => 'appartement',
                                        'duplex' => 'duplex',
                                        'triplex' => 'triplex',
                                        'chalet' => 'chalet',
                                        'immeuble' => 'immeuble',
                                        ),null, ['class' => 'form-control', 'placeholder' => 'Selectionner le type de bien...'])
                                    !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('piece', 'Nombre de pièces') !!}
                                    {!! Form::number('piece', null, ['class' => 'form-control', 'placeholder' => 'ex. 5']) !!}
                                </div>
                            </div>
                            <div class="col-sm-8 prix">
                                <div class="form-group">
                                    {!! Form::label('prix', 'Prix') !!}
                                    {!! Form::number('prix', null, ['class' => 'form-control', 'placeholder' => 'ex. 65000000']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4 loyer">
                                <div class="form-group">
                                    {!! Form::label('loyer', 'Coût du loyer') !!}
                                    {!! Form::number('loyer', null, ['class' => 'form-control', 'placeholder' => 'ex. 40000']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4 caution">
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
                                    {!! Form::text('plus_information', null, ['id' => 'divers', 'value' => 'bonjour']) !!}
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
                                    {!! Form::button('Créer une offre', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg']) !!}
                                </div>
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>

                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

 @endsection

@section('js_script')

    $('.home-type').click(function(){

        var indice = $('.home-type').val();

        if(indice == 2){
            $('.prix').show();
            $('.loyer').hide();
            $('.caution').hide();
        }else{
            $('.prix').hide();
            $('.loyer').show();
            $('.caution').show();
        }

    });


@endsection