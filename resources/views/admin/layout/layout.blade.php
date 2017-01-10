<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/tinymince/skin.min.css') }}">
    <link href="{{ URL::asset('css/tinymice/skin.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/plugin/selectize/selectize.css') }}" rel="stylesheet">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('admin/css/_all-skins.min.css') }}">
    @yield('css_style')
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" class="btn btn-danger btn-block">Deconnexion</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header text-center">MENU PRINCIPAL</li>

                <li>
                    <a href="{{ route('home_admin') }}">
                        <i class="fa fa-th"></i> <span>ACCUEIL</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-university" aria-hidden="true"></i>
                        <span>Agence</span>
                        <span class="pull-right-container">

                            <i class="fa fa-angle-left pull-right"></i>

                          <i class="fa fa-angle-left pull-right"></i>

                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('add_agency') }}"><i class="fa fa-plus" aria-hidden="true"></i> Créer</a></li>
                        <li><a href=""><i class="fa fa-list" aria-hidden="true"></i> Liste</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span>Offres</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('offers.create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Créer</a></li>
                        <li><a href="{{ route('offers.index') }}"><i class="fa fa-list" aria-hidden="true"></i> Liste</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <span>Annonces</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('offers.create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Créer</a></li>
                        <li><a href="{{ route('offers.index') }}"><i class="fa fa-list" aria-hidden="true"></i> Lister</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <span>Reglage</span>
                        <span class="pull-right-container">

                            <i class="fa fa-angle-left pull-right"></i>

                          <i class="fa fa-angle-left pull-right"></i>

                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-plus" aria-hidden="true"></i> Créer un Admin</a></li>
                        <li><a href=""><i class="fa fa-list" aria-hidden="true"></i> Lister les Admin</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    @yield('content')

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> Beta
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://almsaeedstudio.com">GBATA</a>.</strong> Tout droit
        réservé.
    </footer>

    <!-- Control Sidebar -->

    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('admin/js/jquery-2.2.3.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 3.3.6 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/js/app.min.js') }}"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{ URL::asset('js/selectize/selectize.min.js') }}"></script>
    <script src="{{ URL::asset('js/selectize/plugin.js') }}"></script>
    <script>
        tinymce.init({ selector:'textarea' });
        $('#divers').selectize({
            plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
        });
        @yield('js_script')
    </script>

</body>
</html>
