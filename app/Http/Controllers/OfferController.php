<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('offers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $request)
    {
        /* file traitement */

        $offer = new Offer;

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

        $offer->titre = $request->titre;
        $offer->commune = $request->commune;
        $offer->zone = $request->zone;
        $offer->type_maison = $request->type_maison;
        $offer->piece = $request->piece;
        $offer->loyer = $request->loyer;
        $offer->caution = $request->caution;
        $offer->contact = $request->contact;
        $offer->plus_information = $request->plus_information;
        $offer->description = $request->description;
        $offer->image1 = $newFileOneName;
        $offer->image2 = $newFileTwoName;
        $offer->image3 = $newFileThreeName;
        $offer->users_id = 

        $offer->save();

        return redirect()->route('offers.create')->with('success', 'Enregistrement effectué avec succès');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
