<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
public function Home(Guard $auth)
    {
        $user = $auth->user();
        if($user->hasRole('admin')){
            $nbre_location = DB::table('offers')->where('type_offers_id', 'location')->count();
            $nbre_vente = DB::table('offers')->where('type_offers_id', 'vente')->count();
            $nbre_agence = DB::table('users')->where('type_user', 2)->count();
            $nbre_utilisateur = DB::table('users')->where('type_user', 3)->count();
        }else{
            $nbre_location = DB::table('offers')->where('users_id', $auth->id())->where('type_offers_id', 'location')->count();
            $nbre_vente = DB::table('offers')->where('users_id', $auth->id())->where('type_offers_id', 'vente')->count();
            $nbre_agence = DB::table('users')->where('type_user', 2)->count();
            $nbre_utilisateur = DB::table('users')->where('type_user', 3)->count();
        }

        return view('admin/home/home', compact('nbre_location', 'nbre_vente','nbre_agence','nbre_utilisateur'));
    }

}
