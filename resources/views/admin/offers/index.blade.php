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
                            @if (count($offers) === 0)
                                <div class="col-sm-12">
                                    <div class="search_resultats_list">
                                        <div class="message_not_offer">
                                            <p class="message_not_offer_content">
                                                Nous n'avons pas trouvé d'annonce<br> correspondant exactement à vos critères.
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            @elseif (count($offers) >= 1)
                            @foreach($offers as $offer)
                                @if($offer->state_offer == 1)
                                <tr style="background-color: lightcoral">
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
                                            <a class="btn btn-danger btn-sm" href="{{ route('desactivate_offer', $offer->id) }}">Desactiver</a>
                                        @else
                                            <a class="btn btn-success btn-sm" href="{{ route('activate_offer', $offer->id) }}">Activer</a>
                                        @endif
                                    </td>

                                </tr>
                                @else
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
                                            <a class="btn btn-danger btn-sm" href="{{ route('desactivate_offer', $offer->id) }}">Desactiver</a>
                                        @else
                                        <a class="btn btn-success btn-sm" href="{{ route('activate_offer', $offer->id) }}">Activer</a>
                                        @endif
                                    </td>

                                </tr>

                                @endif
                            @endforeach
                                @endif
                            </tbody>
                        </table>
                    {{$offers->links()}}

                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

