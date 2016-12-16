@extends('layout/layout')

@section('title')
    Liste des Offres
@endsection

@section('content')

    <div class="container" style="margin-top: 8em;">

        <div class="row">
            <div class="col-sm-3 text-justify">

                <h3>Sidebar en cour de dev</h3>

            </div>
            <div class="col-sm-9 text-justify">
                <div class="row">

                    <?php for($i=0; $i<=5; $i++){ ?>

                    <div class="col-sm-6">

                        <!-- une offre -->

                        <div class="offre-block">
                            <div class="offre-img-block">
                                <img src="{{ asset('img/1.jpg') }}" class="offre-img" alt="">
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
                                        <a class="detail-button" href="">Details &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="offre-date" style="padding: 10px;">
                            <div class="row">
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
                                <img src="{{ asset('img/mg_2381.jpg') }}" class="offre-img" alt="">
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
                                        <a class="detail-button" href="">Details &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="offre-date" style="padding: 10px;">
                            <div class="row">
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
            </div>
        </div>

    </div>


    <br><br><br>

@endsection