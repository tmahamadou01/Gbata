@extends('layout/layout')

@section('title')
    Detail offre
@endsection

@section('content')

    <div class="container" style="margin-top: 6.5em;">

        <div class="row">

            <div class="col-sm-9">

                <div class="detail-page-style">

                    <div class="offre-name">
                        Viens goutter la villa
                    </div>
                    <div class="offre-slide">

                        <div class="offre-slide-content">
                            <div class="item">
                                <img src="{{ asset('img/villa_6.jpg') }}" style="width: 100%; height: 450px;" alt="">
                            </div>

                            <div class="item">
                                <img src="{{ asset('img/villa_5.jpg') }}" style="width: 100%; height: 450px;" alt="">
                            </div>

                            <div class="item">
                                <img src="{{ asset('img/villa_3.jpg') }}" style="width: 100%; height: 450px;" alt="">
                            </div>

                        </div>
                        <div class="control">
                            <i class="control-right fa fa-angle-right" aria-hidden="true"></i>
                            <i class="control-left fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="offre-slide-arrow">
                        <div class="item">
                            <img src="{{ asset('img/villa_6.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        </div>

                        <div class="item">
                            <img src="{{ asset('img/villa_5.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        </div>

                        <div class="item">
                            <img src="{{ asset('img/villa_3.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        </div>
                    </div>

                    <div class="carateristique">
                        <table class="table table-responsive table-bordered">
                            <tr>
                                <td><i class="fa fa-bath" aria-hidden="true"></i>
                                     Lorem</td>
                                <td><i class="fa fa-shower" aria-hidden="true"></i>
                                     ipsum</td>
                                <td><i class="fa fa-bed" aria-hidden="true"></i>
                                     dolor</td>
                                <td><i class="fa fa-database" aria-hidden="true"></i>
                                     consectetur</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-television" aria-hidden="true"></i>
                                     adipisicing</td>
                                <td><i class="fa fa-chrome" aria-hidden="true"></i>
                                     accusamus</td>
                                <td><i class="fa fa-envira" aria-hidden="true"></i>
                                     3 dolore</td>
                                <td><i class="fa fa-usb" aria-hidden="true"></i>
                                     1 dolorum</td>
                            </tr>
                        </table>
                    </div>
                    <div class="les-detail">
                        <span>information complementaire</span>


                        <div class="row">
                            <div class="col-sm-6">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Type</td>
                                        <td>Appartement</td>
                                    </tr>
                                    <tr>
                                        <td>Statut</td>
                                        <td>A vendre</td>
                                    </tr>
                                    <tr>
                                        <td>Ville</td>
                                        <td>Abidjan</td>
                                    </tr>
                                    <tr>
                                        <td>Prix</td>
                                        <td>150000000 F</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Chambre</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Salon</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Parcking</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Espace</td>
                                        <td>10m²</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="les-detail-over">
                        <div class="row">
                            @for ($i = 0; $i < 12; $i++)

                                <div class="col-sm-3">
                                    <i class="fa fa-check" aria-hidden="true"></i> lorem ipseum
                                </div>

                            @endfor

                        </div>
                    </div>
                    <div class="description">
                        <span>description</span>


                        <div class="row">
                            <div class="col-sm-12">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque laboriosam laborum nemo numquam voluptate. Beatae, ea, neque? Accusantium aliquam debitis ducimus ea eum, facere facilis iusto non quam reprehenderit voluptates?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, adipisci aliquid aspernatur assumenda consectetur cum debitis enim est iusto modi molestiae nostrum placeat, quis quo quos repudiandae similique veniam voluptatem.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto culpa doloremque eos excepturi illum, incidunt itaque labore laborum possimus ratione reprehenderit similique soluta sunt velit vero voluptatum. In, nobis?
                            </div>
                        </div>
                    </div>
                    <div class="localisation">
                        <span>localisation</span>

                        <div class="row">
                            <div class="col-sm-12">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=-4.037690162658692%2C5.3401045702320715%2C-4.006834030151368%2C5.365698755750563&amp;layer=mapnik&amp;marker=5.352880432802857%2C-4.02224063873291" style="border: 1px solid #dddddd; width: 100%; height: 300px;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-3">

                <div class="detail-page-sidebar">
                    <div class="agency">
                        <div style="padding: 10px; font-weight: bold;">Logement proposé par GBATA</div>
                        <hr>

                        <div style="padding: 10px;">
                            Agence situé a par exemple tu es a yopougon et puis tu veut partir laba donc tu empreunte un gbaka et tu descent a la liberte maintenant les gbaka qui disent adjamé la tu prend un et tu descent au paillet et tu appel il von venir te chercher

                        </div>
                        <hr>
                        <div class="text-center" style="padding: 10px;">
                            mail : agencebizar@mousso.com
                        </div>
                        <hr>
                        <div class="text-center" style="padding: 10px;">
                            contact : (+225) 49 32 66 23
                        </div>
                    </div>

                </div>
                <br>
                <div class="detail-page-sidebar">

                    <div class="row" style="padding: 15px 10px 0;">
                        <div class="col-sm-6">
                            Publié le
                        </div>
                        <div class="col-sm-6 text-right">
                            28/10/2016
                        </div>
                    </div>

                    <hr>

                    <div class="row" style="padding: 15px 10px 0;">
                        <div class="col-sm-6">
                            Reponse
                        </div>
                        <div class="col-sm-6 text-right">
                            moin de 48h
                        </div>
                    </div>

                    <hr>
                    <div class="row" style="padding: 15px 10px 0;">
                        <div class="col-sm-6">
                            Vérifié
                        </div>
                        <div class="col-sm-6 text-right">
                            OUI
                        </div>
                    </div>


                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="" class="favori-button"><i class="fa fa-heart" aria-hidden="true"></i> Ajouter à mes favoris</a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <br><br>

@endsection

@section('js_script')

@endsection
