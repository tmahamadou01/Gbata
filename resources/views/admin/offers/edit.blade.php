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

                        {!! Form::open(['method' => 'put', 'url' => route('offers.update', $offers)]) !!}

                        {!! csrf_field() !!}

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('titre', 'Titre de l\'annonce') !!}
                                    {!! Form::text('titre', $offers->titre, ['class' => 'form-control', 'placeholder' => 'ex. Appartement du 75']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('type_offers_id', 'Type d\'annonce') !!} <strong style="color: red;">*</strong>
                                    {!! Form::select('type_offers_id',array(
                                        '1' => 'Location',
                                        '2' => 'Vente',
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
                                        'portboue' => 'Port Bouet',
                                        ),$offers->commune, ['class' => 'form-control', 'placeholder' => 'Selectionner une commune ...'])
                                    !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('zone', 'zone') !!}
                                    {!! Form::text('zone', $offers->zone, ['class' => 'form-control', 'placeholder' => 'ex. paillet']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('type_maison', 'Type de maison') !!}
                                    {!! Form::text('type_maison', $offers->type_maison, ['class' => 'form-control', 'placeholder' => 'ex. studio']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('piece', 'Nombre de pièces') !!}
                                    {!! Form::number('piece', $offers->piece, ['class' => 'form-control', 'placeholder' => 'ex. 5']) !!}
                                </div>
                            </div>
                            <div class="col-sm-8 prix">
                                <div class="form-group">
                                    {!! Form::label('prix', 'Prix') !!}
                                    {!! Form::number('prix', $offers->prix, ['class' => 'form-control', 'placeholder' => 'ex. 65000000']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4 loyer">
                                <div class="form-group">
                                    {!! Form::label('loyer', 'Coût du loyer') !!}
                                    {!! Form::number('loyer', $offers->loyer, ['class' => 'form-control', 'placeholder' => 'ex. 40000']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4 caution">
                                <div class="form-group">
                                    {!! Form::label('caution', 'Caution') !!}
                                    {!! Form::number('caution', $offers->caution, ['class' => 'form-control', 'placeholder' => 'ex. 8']) !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label('contact', 'Contact') !!}
                                    {!! Form::number('contact', $offers->contact, ['class' => 'form-control', 'placeholder' => 'ex. 07070707']) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {!! Form::label('plus_information', 'Plus d\'information') !!}
                                    {!! Form::text('plus_information', $offers->plus_information, ['id' => 'divers']) !!}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {!! Form::label('description', 'Description') !!}
                                    {!! Form::textarea('description', $offers->description) !!}
                                </div>
                            </div>

                            <div class="col-sm-2 col-sm-offset-1">
                                <div class="form-group">
                                    {!! Form::button('Modifier', ['type' => 'submit', 'class' => 'btn btn-primary btn-block btn-lg']) !!}
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