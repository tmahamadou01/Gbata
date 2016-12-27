<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SaleController extends Controller
{
    public function listsale(){

        return view('sale/list');
    }

    public function detailsale($id_sale){


        return view('sale/detail');
    }

    public function addsale(){

        return view('sale/add');
    }
}
