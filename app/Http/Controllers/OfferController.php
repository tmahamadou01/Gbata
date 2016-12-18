<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function listoffer(){

        return view('offer/list');
    }

    public function detailoffer($id_offer){


        return view('offer/detail');
    }
}
