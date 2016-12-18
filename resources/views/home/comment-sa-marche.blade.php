@extends('layout.layout')

@section('title')
    Connexion
@endsection

@section('content')

    <!-- container -->

    <div class="container" style="margin-top: 6em;">

        <div class="row">

            <div class="col-sm-12">
                <div class="text-center">
                    <h1>Comment ça Marche</h1>
                </div>

            </div>

        </div>

    </div>
    <br><br><br><br><br>

@endsection

@section('js_script')
    $('#close').click(function(){
    $('.form-message').fadeOut("slow");
    });
@endsection
