<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use App\Offer;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Guard $auth)
    {
        $offers = DB::table('offers')->where('users_id', $auth->id())->orderBy('created_at','DESC')->get();

        return view('admin.offers.index', ['offers' => $offers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Guard $auth)
    {

        /* file traitement */
        $offer = new Offer();

        $this->validate($request, [
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
        ]);

        $filOne = $request->file('image1');
        $filTwo = $request->file('image2');
        $filThree = $request->file('image3');

        $newFileOneName = rand(0,1000000000).'_' . date('d') . date('m') . date('Y') . date('H') . date('i') . date('s') . '.'.$filOne->getClientOriginalExtension();
        $newFileTwoName = rand(0,1000000000).'_' . date('d') . date('m') . date('Y') . date('H') . date('i') . date('s') . '.'.$filTwo->getClientOriginalExtension();
        $newFileThreeName = rand(0,1000000000).'_' . date('d') . date('m') . date('Y') . date('H') . date('i') . date('s') . '.'.$filThree->getClientOriginalExtension();

        $destinationPath = public_path('offers_img');

        $filOne->move($destinationPath, $newFileOneName);
        $filTwo->move($destinationPath, $newFileTwoName);
        $filThree->move($destinationPath, $newFileThreeName);

        $offer->loyer = $request->loyer;
        $offer->caution = $request->caution;
        $offer->prix = $request->prix;

        $offer->titre = $request->titre;
        $offer->commune = $request->commune;
        $offer->zone = $request->zone;
        $offer->type_maison = $request->type_maison;
        $offer->piece = $request->piece;



        $offer->contact = $request->contact;
        $offer->plus_information = $request->plus_information;
        $offer->description = $request->description;
        $offer->image1 = $newFileOneName;
        $offer->image2 = $newFileTwoName;
        $offer->image3 = $newFileThreeName;
        $offer->users_id = $auth->id();
        $offer->type_offers_id = $request->type_offers_id;

        $offer->save();

        return redirect()->route('offers.create')->with('success', 'Votre annonce à été enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::find($id);
        return view('admin.offers.edit', ['offers' => $offer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $offers = Offer::findOrFail($id);
        $offers->update($request->all());
        return redirect(route('offers.edit', $offers))->with('success', 'Modification éffectué avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Offer::findOrFail($id)->delete();

        return redirect()->route('offers.index')->with('success', 'Supression éffectué avec succès');
    }
}
