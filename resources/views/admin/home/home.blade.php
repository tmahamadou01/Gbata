@extends('admin/layout/layout')

@section('title')
    Admin zone
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>15000</h3>

                            <p>Offres de location</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lister <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>5300</h3>

                            <p>Offres de vente</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lister <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                @role('admin')
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>10000</h3>

                            <p>Agences</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-university" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lister <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                @endrole
                <!-- ./col -->
                @role('admin')
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>650000</h3>

                            <p>Utilisateurs</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="small-box-footer">utilisateurs gbata</a>
                    </div>
                </div>
                @endrole
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->

            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection