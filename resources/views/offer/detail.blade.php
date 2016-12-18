@extends('layout/layout')

@section('title')
    Detail offre
@endsection

@section('content')

    <div class="container" style="margin-top: 8em;">

        <div class="row">

            <div class="col-sm-9">

                <div class="detail-page-style">

                    <div class="offre-name">
                        Localhost Palace du 75
                    </div>
                    <div class="offre-slide">

                        <div class="offre-slide-content">
                            <div class="item">
                                <img src="{{ asset('img/villa_1.jpg') }}" style="width: 100%; height: 450px;" alt="">
                            </div>

                            <div class="item">
                                <img src="{{ asset('img/villa_2.jpg') }}" style="width: 100%; height: 450px;" alt="">
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
                            <img src="{{ asset('img/villa_1.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        </div>

                        <div class="item">
                            <img src="{{ asset('img/villa_2.jpg') }}" style="width: 120px; height: 80px;" alt="">
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

                            <div class="diviseur">
                                <?php for($i=0; $i<=120; $i++){ ?><img src="{{ asset('img/divider1.png') }}" alt=""> <?php } ?>
                            </div>

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

                        <div class="diviseur">
                            <?php for($i=0; $i<=120; $i++){ ?><img src="{{ asset('img/divider1.png') }}" alt=""> <?php } ?>
                        </div>

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
            <div class="col-sm-3">



            </div>

        </div>

    </div>

    <br><br>

@endsection

@section('js_script')

@endsection
