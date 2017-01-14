@extends('admin.layout.layout')

@section('title')
    My offers list
@endsection

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-tachometer" aria-hidden="true"></i> Mes annonces
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Annonce</a></li>
                <li class="active"><a href="#">Liste</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <div class="col-sm-12">

                    @if($offers != [])
                        <table class="table table-bordered" >
                            <thead>
                            <tr>
                                <th data-field="id">TITRE DE L'ANNONCE</th>
                                <th data-field="name">COMMUNE</th>
                                <th data-field="price">LOYER</th>
                                <th data-field="price">CAUTION</th>
                                <th data-field="price">TYPE OFFRE</th>
                                <th data-field="price">DATE CREATION</th>
                                <th data-field="price">ACTIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($offers as $offer)
                                <tr>
                                    <td>{{ $offer->titre }}</td>
                                    <td>{{ $offer->commune }}</td>
                                    <td>{{ $offer->loyer }}</td>
                                    <td>{{ $offer->caution }}</td>
                                    <td>
                                        @if($offer->type_offers_id == 'location')
                                            <span class="label label-primary">{{ $offer->type_offers_id }}</span>
                                        @else
                                            <span class="label label-success">{{ $offer->type_offers_id }}</span>

                                        @endif
                                    </td>
                                    <td>{{ $offer->created_at }}</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="{{ route('offers.edit', $offer->id) }}">Modifier</a>
                                        @if($offer->state_offer == 0)
                                            <a class="btn btn-danger btn-sm" href="{{ route('offers.destroy', $offer->id) }}">Desactiver</a>
                                        @else
                                        <a class="btn btn-success btn-sm" href="{{ route('offers.destroy', $offer->id) }}">Activer</a>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <?= ' vide '?>

                    @endif

                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

