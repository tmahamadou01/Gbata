<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style_offre.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugin/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugin/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/tinymice/skin.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugin/selectize/selectize.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    @yield('custom_css')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background-color: #f2f2f2;">


<!-- header with logo -->
<div class="container-fluid">
    <div id="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <a href="{{ route('accueil') }}"><img src="{{ asset('img/logo.png') }}" class="logo-gbata" alt=""></a>
                </div>

                <div class="col-xs-10 disponible">
                    <i class="phone-icone fa fa-phone" aria-hidden="true"></i>
                    <div class="phone-number">
                        <span class="phone">(+225) 47 11 32 02</span><br>
                        <span class="day">du lundi au samedi de 9h à 18h</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- end  -->

<div class="container-fluid">
    <ul id="menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <li class="menu-item menu-item-one"><a class="menu-link" href="">Annonces</a>
                        <ul class="sous-menu">
                            <li><a href="">Locations</a></li>
                            <li><a href="">Ventes</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="">Comment ça marche ?</a></li>
                    <li class="menu-item"><a class="menu-link" href="">Contacts</a></li>
                    <li class="menu-item menu-item-with-account">
                        <a class="menu-link" href="">
                            <i class="myAccount-icone fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="mySpace">Mon espace</span>
                            @if (Auth::guest())
                                <span class="myAccount">Connectez-vous</span>
                            @else
                                <span class="myAccount">{{ Auth::user()->name }}</span>
                            @endif
                        </a>
                        <ul class="connexion">
                            @if (Auth::guest())
                                <li class="connexion-btn-style">
                                    <a href="{{ route('login') }}" class="">Connectez-vous</a>
                                </li>
                                <li class="create-account"><a href="{{ route('register') }}">Créer un compte</a></li>
                            @else
                                <li class="connexion-btn-style">
                                    <a href="{{ route('logout') }}" class="">Deconnexion</a>
                                </li><br>
                            @endif
                        </ul>
                    </li>
                    <li class="menu-item-passer-une-annonce"><a class="menu-link" href="{{route('offers.create')}}">Passer une annonce</a></li>

                </div>
            </div>
        </div>
    </ul>
</div>




    <!--</ul>
    <ul id="menu-sm">
        <li class="menu-item"><span class="menu-link" href=""><i class="fa fa-align-justify fa-2x" aria-hidden="true"></i></span>
            <ul id="sous-menu-sm">
                <li><a href="{{ route('how') }}">Comment ça marche ?</a></li>
                <li><a href="">Offres</a></li>
                <li><a href="">Contacts</a></li>
            </ul>
        </li>
    </ul>-->


    @yield('content')

    <!-- footer -->
    <div class="container-fluid">
        <div class="row">
            <div class="block-footer" style="color: #FFF;">

                <div class="container">
                    <div class="row">

                        <div class="col-sm-4">
                            <h3>A propos de nous</h3><br>
                            <p><a href="">Gbata</a></p>
                            <p><a href="">Besoin d'aide ?</a></p>
                            <p><a href="">Partenaires</a></p>
                            <p><a href="">Contacts</a></p>
                            <p><a href="">Mentions Légales</a></p>
                        </div>
                        <div class="col-sm-4">
                            <h3>Information</h3><br>
                            <p><a href="">Actualités</a></p>
                            <p><a href="">FAQ</a></p>
                            <p><a href="">Conditions Générales d'Utilisation</a></p>
                        </div>
                        <div class="col-sm-4">
                            <h3>Suivre l'actualité de Gbata ici</h3><br>
                            <p><a href="">Soyez le premier au courant en vous inscrivant à notre newsletter.</a></p>

                            <p>
                            <form class="form-inline">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="" placeholder="ex. infos@gbata.ci">
                                        <div class="input-group-addon"><a href=""><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </form>
                            </p>
                        </div>

                    </div>
                    <div class="col-sm-4 col-sm-offset-4 text-center"><br>
                        <i class="rubrique-icon fa fa-home" aria-hidden="true"></i>
                        <div class="bar"></div>
                    </div>
                    <br><br>
                    <div class="col-sm-2">
                        Copyright GBATA &copy; 2016
                    </div>
                    <div class="col-sm-4 col-sm-offset-6">
                        <div class="social-block">
                            <div class="reseau-social" >
                                <a href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                            </div>
                            <div class="reseau-social" >
                                <a href=""><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                            </div>
                            <div class="reseau-social" >
                                <a href=""><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
                            </div>

                        </div>
                        <div class="top text-right">
                            <a id="back-to-top" href="#" role="button">
                                <i class="fa fa-caret-up" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/slick/slick.min.js') }}"></script>
<script src="{{ URL::asset('js/selectize/selectize.min.js') }}"></script>
<script src="{{ URL::asset('js/selectize/plugin.js') }}"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script>
    @yield('js_script')
</script>

</body>
</html>