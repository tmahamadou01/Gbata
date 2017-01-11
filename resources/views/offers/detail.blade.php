@extends('layout/layout')

@section('title')
    Detail offre
@endsection

@section('content')

<div class="container" id="offers-detail-page">
    <br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Annonce</a></li>
                    <li class="#">Liste</li>
                    <li class="active">Detail</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="offers-references">
                <div class="row offers-name-price">
                    <div class="col-xs-9">
                        <span class="name">
                            Localhost palace de merde Lorem
                        </span>
                        <span class="ref">
                            Réf. : B13/1897 / 09 janvier 2017
                        </span>
                    </div>
                    <div class="col-xs-3 text-right" style="padding-top: 5px;">
                        <span class="price">
                            1000000000 F
                        </span>
                    </div>
                    <div class="col-sm-12 favorie-button">
                        <div>
                            <a href=""><i class="fa fa-star-o" aria-hidden="true"></i> Ajouter à mes favoris</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="offre-slide">

                            <div class="offre-slide-content">
                                <div class="item">
                                    <img src="{{ asset('offers_img/82169068_09012017184243.jpg') }}" style="width: 100%; height: 450px;" alt="">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('offers_img/193621276_09012017000812.png') }}" style="width: 100%; height: 450px;" alt="">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('offers_img/524348698_09012017184243.png') }}" style="width: 100%; height: 450px;" alt="">
                                </div>

                            </div>
                            <div class="control">
                                <i class="control-right fa fa-angle-right" aria-hidden="true"></i>
                                <i class="control-left fa fa-angle-left" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="offre-slide-arrow">
                            <div class="item">
                                <img src="{{ asset('offers_img/82169068_09012017184243.jpg') }}" style="width: 100px; height: 60px;" alt="">
                            </div>

                            <div class="item">
                                <img src="{{ asset('offers_img/193621276_09012017000812.png') }}" style="width: 100px; height: 60px;" alt="">
                            </div>

                            <div class="item">
                                <img src="{{ asset('offers_img/524348698_09012017184243.png') }}" style="width: 100px; height: 60px;" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-12">
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
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-12">
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
                                            <td>A louer</td>
                                        </tr>
                                        <tr>
                                            <td>Ville</td>
                                            <td>Abidjan</td>
                                        </tr>
                                        <tr>
                                            <td>Prix</td>
                                            <td>150000 / moi</td>
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
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-12">
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
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-12">
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
            </div>
        </div>
        <div class="col-sm-4 text-justify">, consectetur adipisicing elit. Accusamus, aperiam asperiores consectetur dolore doloremque earum eius eligendi ex facilis hic labore magnam minima minus natus officia quae ratione repudiandae vel!</div>

    </div>
</div>
<br><br><br><br>
@endsection

@section('js_script')

@endsection
