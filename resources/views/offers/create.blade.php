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
                                <li><a href="{{ route('add_offer') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Ajouter un bien</a></li>
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

                        <div>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="" role="tab" data-toggle="tab">LOCATION</a></li>
                                <li><a href="{{ route('add_sale') }}" >VENTE</a></li>
                            </ul>

                        </div>


                        <!--<div class="location-link">
                            <a href="">LOCATION</a>
                        </div>
                        <div class="vente-link">
                            <a href="">VENTE</a>
                        </div>-->
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-sm-12">

                        <div class="add-offer-form">


                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="">Titre de l'annonce</label>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Ville / Commune</label>
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
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Zone</label>
                                            <input type="text" class="form-control" placeholder="ex. Paillet">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Type de bien</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Selectionnez le type de bien ...</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Bien</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Selectionnez le bien ...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Nombre de pièce</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Nombre de pièces ...</option>
                                            @for($j=1; $j<7; $j++)
                                                <option value="">{{ $j }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Loyer</label>
                                            <input type="text" class="form-control" placeholder="ex. 150000">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Caution</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Selectionner la caution ...</option>
                                            @for($i=1; $i<10; $i++)
                                                <option value="">{{ $i }} moi(s)</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Autres Options</label>
                                    <input type="text" id="divers" value="" placeholder="ex. garage">

                                </div>

                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="" id="" style="height: 200px;">

                                    </textarea>

                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="">Image 1</label>
                                        <input type="file" class="btn btn-default btn-block">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Image 2</label>
                                        <input type="file" class="btn btn-default btn-block">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Image 3</label>
                                        <input type="file" class="btn btn-default btn-block">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <button class="search-box-button" role="button" type="submit">
                                            Publier mon offre
                                        </button>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <br><br><br>

@endsection
