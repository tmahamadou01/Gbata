@extends('layout.layout')

@section('title')
    Contactez GBATA
@stop

@section('content')

    <div class="container-fluid" style="margin-top: 9em;">
        <div class="container search-box-padding">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <h1>Formulaire de Contact</h1>
                    <div class="form-message" style="width: 100%;">
                        Tous les champs avec <span style="color: red;">*</span> sont obligatoires &nbsp;&nbsp;&nbsp; <i id="close" class="fa fa-times" aria-hidden="true"></i>
                    </div>
                    <div>
                        @include('partials.flash')
                    </div>
                    <br>

                    {!! Form::open(array('route' => 'contact.send', 'enctype' => "multipart/form-data")) !!}

                    <div class="form-group">
                        <label for="">Nom <span class="required"></span></label>
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom ...']) !!}
                        @if ($errors->has('nom'))
                            <span>
                                <ul class="basic_error"><li>{{ $errors->first('nom') }}</li></ul>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Prenom <span class="required"></span></label>
                        {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Votre prenom ...']) !!}
                        @if ($errors->has('prenom'))
                            <span>
                                <ul class="basic_error"><li>{{ $errors->first('prenom') }}</li></ul>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Email <span class="required"></span></label>
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email ...']) !!}
                        @if ($errors->has('email'))
                            <span>
                                <ul class="basic_error"><li>{{ $errors->first('email') }}</li></ul>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Message <span class="required"></span></label>
                        {!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => '10', 'cols' => '20', 'placeholder' => 'Votre message ...', 'max-min' => '100%']) !!}
                        @if ($errors->has('message'))
                            <span>
                                <ul class="basic_error"><li>{{ $errors->first('message') }}</li></ul>
                            </span>
                        @endif
                    </div>

                    <div class="form-group text-center">
                        {!! Form::button('Envoyer mon message', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
                <div class="col-sm-5">
                    <h1>Coordonnées</h1>
                    <br>
                    <div class="les-numeros">
                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-10">
                                <div class="first">
                                    Par téléphone
                                </div>
                                <div class="second">
                                    +225 00 00 00 00 <br>
                                    +225 44 44 44 44 <br>
                                    24h /24 et 7j/7

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="les-numeros">
                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-at" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-10">
                                <div class="first">
                                    Par Mail
                                </div>
                                <div class="second">
                                    <p></p>
                                    info@gbata.ci
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=-4.141159057617188%2C5.21164759601505%2C-3.8943099975585938%2C5.424616839194558&amp;layer=mapnik&amp;marker=5.317970506163205%2C-4.0175628662109375" style="border: 1px solid #008B8B; width: 100%; height: 248px; border-radius: 5px;"></iframe>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>

    </div>


@stop