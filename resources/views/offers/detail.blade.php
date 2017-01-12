@extends('layout/layout')

@section('title')
    Detail offre
@endsection

@section('content')

<div class="container" id="offers-detail-page">
    <br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-sm-10">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Annonce</a></li>
                    <li class="#">Liste</li>
                    <li class="active">Detail</li>
                </ol>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="retour-button">
                <a href=""><i class="fa fa-list" aria-hidden="true"></i> Retour à la liste</a>
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
                            <a href=""><i class="fa fa-star-o" aria-hidden="true"></i> Ajouter à mes favoris</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=""><i class="fa fa-print" aria-hidden="true"></i> Imprimer la fiche de visite</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=""><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Envoyer à un ami</a>
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
                <br>
                <div class="row carateristique-block">
                    @for($i=0; $i<10; $i++)
                    <div class="col-sm-3">
                        <div class="carateristique">
                            <div class="item">
                                <i class="fa fa-shower" aria-hidden="true"></i> bienvenue
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                <br>
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
                <br>
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="user-phone">
                            <i class="fa fa-phone-square" aria-hidden="true"></i> <span class="annonceur">Afficher le numero</span> <span class="numero">49 32 66 23</span>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-annonceur-form">
                        <div class="form-header">
                            Contacter le propriétaire
                        </div>
                        <div class="conact-form-content">
                            <div class="row">
                                <form action="">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <i class="votre-nom fa fa-user-circle-o" aria-hidden="true"></i>
                                                    <input type="text" class="form-control" placeholder="votre nom">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <i class="votre-prenom fa fa-user-circle-o" aria-hidden="true"></i>
                                                    <input type="text" class="form-control" placeholder="votre prenom">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <i class="votre-email fa fa-envelope-open-o" aria-hidden="true"></i>
                                                    <input type="text" class="form-control" placeholder="votre email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <i class="votre-telephone fa fa-phone" aria-hidden="true"></i>
                                                    <input type="text" class="form-control" placeholder="votre telephone">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <textarea style="max-width: 100%; height: 205px;" class="form-control" placeholder="Votre message (penser à indiquer si vous êtes etudiant ou un couple en CDI/CDD etc ..., vos revenu et si vous avez un garant)"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button role="button" type="submit" class="search-box-button">
                                            Envoyer
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="detail-all-parameter">
                        <div class="signaler">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i><br>
                            <a href="">signaler <br> un probleme</a>
                        </div>
                        <div class="diviseur"></div>
                        <div class="imprimer">
                            <i class="fa fa-print" aria-hidden="true"></i><br>
                            <a href="">imprimer la <br> fiche de visite</a>
                        </div>
                        <div class="diviseur"></div>
                        <div class="envoyer">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i><br>
                            <a href="">envoyer l'annonce <br> à un ami</a>
                        </div>
                        <div class="diviseur"></div>
                        <div class="suprimer">
                            <i class="fa fa-star-o" aria-hidden="true"></i><br>
                            <a href="">suprimer <br> de mes favoris</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-annonceur-form-sidebar">
                        <div class="form-header">
                            Contacter le propriétaire
                        </div>
                        <div class="conact-form-content-sidebar">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="user-phone">
                                        <i class="fa fa-phone-square" aria-hidden="true"></i> <span class="annonceur">Afficher le numero</span> <span class="numero">49 32 66 23</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <form action="">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <i class="votre-nom fa fa-user-circle-o" aria-hidden="true"></i>
                                                <input type="text" class="form-control" placeholder="votre nom">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <i class="votre-prenom fa fa-user-circle-o" aria-hidden="true"></i>
                                                <input type="text" class="form-control" placeholder="votre prenom">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <i class="votre-email fa fa-envelope-open-o" aria-hidden="true"></i>
                                                <input type="text" class="form-control" placeholder="votre email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <i class="votre-telephone fa fa-phone" aria-hidden="true"></i>
                                                <input type="text" class="form-control" placeholder="votre telephone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea style="max-width: 100%; height: 205px;" class="form-control" placeholder="Votre message (penser à indiquer si vous êtes etudiant ou un couple en CDI/CDD etc ..., vos revenu et si vous avez un garant)"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <button role="button" type="submit" class="search-box-button-sidebar">
                                                Envoyer
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<br><br><br><br>
@endsection

@section('js_script')
    var indice = 1;
    $('.user-phone').click(function(){
        if(indice == 1){
            $('.annonceur').hide();
            $('.numero').show();
            indice = 0;
        }else{
            $('.annonceur').show();
            $('.numero').hide();
            indice = 1;
        }

    });
@endsection
