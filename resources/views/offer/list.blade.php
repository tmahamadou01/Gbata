@extends('layout/layout')

@section('title')
    Liste des Offres
@endsection

@section('content')

    <div class="container" style="margin-top: 6.5em;">

        <div class="row">
            <div class="col-sm-3 text-justify">

                <!-- sidebar -->

                <div class="sidebar-offre">

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
                                <li role="" class="active"><a href="" aria-controls="home" role="tab" data-toggle="tab">LOCATION</a></li>
                                <li role=""><a href="" aria-controls="profile" role="tab" data-toggle="tab">VENTE</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                            </div>

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

                    <?php for($i=0; $i<=5; $i++){ ?>

                    <div class="col-sm-6">

                        <!-- une offre -->

                        <div class="offre-block">
                            <div class="offre-img-block">
                                <img src="{{ asset('img/villa_1.jpg') }}" class="offre-img" alt="">
                                <div class="block-vert">Appartement</div>
                                <div class="block-noir">à vendre</div>
                                <div class="block-prix">150000 F / moi</div>
                                <div class="block-favorite"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="offre-name">
                                <span class="name">Appartement Open Source 404</span>
                                <span class="city-name">Adjamé / Paillet</span>
                                <div class="row">
                                    <div class="col-sm-6" style="margin-top: 5px;">
                                        <span style="font-size: 14px; font-weight: bold;">Appartement</span>
                                    </div>
                                    <div class="col-sm-6 text-right" style="margin-top: 5px;">
                                        <a class="detail-button" href="{{ route('detail_offer',1) }}">Details &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 20 / 10 / 2016</span>
                                </div>
                            </div>
                        </div>

                        <!-- fin d'une offre -->

                    </div>
                    <div class="col-sm-6">

                        <!-- une offre -->

                        <div class="offre-block">
                            <div class="offre-img-block">
                                <img src="{{ asset('img/villa_3.jpg') }}" class="offre-img" alt="">
                                <div class="block-vert">Villa</div>
                                <div class="block-noir">à vendre</div>
                                <div class="block-prix">150000 F / moi</div>
                                <div class="block-favorite"><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="offre-name">
                                <span class="name">Appartement Open Source 404</span>
                                <span class="city-name">Yopougon / Annanerai</span>
                                <div class="row">
                                    <div class="col-sm-6" style="margin-top: 5px;">
                                        <span style="font-size: 14px; font-weight: bold;">Appartement</span>
                                    </div>
                                    <div class="col-sm-6 text-right" style="margin-top: 5px;">
                                        <a class="detail-button" href="{{ route('detail_offer',1) }}">Details &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 20 / 10 / 2016</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- fin d'une offre -->

                    </div>

                    <?php } ?>

                </div>

                <div class="row">
                    <div class="col-sm-12">

                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>

        </div>

    </div>


    <br><br><br>

@endsection