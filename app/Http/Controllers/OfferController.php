<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Offer;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $offers = DB::table('offers')->where('state_offer', '0')->orderBy('created_at','DESC')->paginate(4);
        return view('offers.index',['offers' =>$offers]);
    }
    public function offer_location(){
        $offers = DB::table('offers')->where('type_offers_id', 'location')->orderBy('created_at','DESC')->paginate(4);
        return view('offers.index',['offers' =>$offers]);
    }
    public function offer_vente(){
        $offers = DB::table('offers')->where('type_offers_id', 'vente')->orderBy('created_at','DESC')->paginate(4);
        return view('offers.index',['offers' =>$offers]);
    }

    public function search(Request $request){
//        dd(Input::all());
//        $searchTerms = explode(',', $q);
//        dd($searchTerms);
        $query = $request->input('commune');
        $query2 = $request->input('type_offer');
        $query3 = $request->input('piece');
        $query4 = $request->input('budget');
//        //dd($query2);
//        $offers = DB::table('offers')
//                                ->orWhere('type_offers_id', 'LIKE', '%' . $query2 . '%')
//                                ->orWhere('commune', 'LIKE', '%' . $query . '%')
//                                ->orderBy('created_at','DESC')
//                                ->paginate(4);

        if ($query4 != ''){
            $offers = DB::table('offers')
                ->where('commune', 'LIKE', '%'.$query.'%')
                ->where('piece', 'LIKE', '%'.$query3.'%')
                ->where('type_offers_id', 'LIKE', '%'.$query2.'%')
                ->where('loyer', '<=', $query4)
                ->orderBy('created_at','DESC')
                ->paginate(4);
        }else{
            $offers = DB::table('offers')
                ->where('commune', 'LIKE', '%'.$query.'%')
                ->where('piece', 'LIKE', '%'.$query3.'%')
                ->where('type_offers_id', 'LIKE', '%'.$query2.'%')
                ->orderBy('created_at','DESC')
                ->paginate(4);
        }

        //dd($search);
        return view('offers.index',compact('offers', 'query'));
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
    public function store(OfferRequest $request, Guard $auth)
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
        $offer->users_id = $auth->id();
        $offer->type_offers_id = $request->type_offers_id;

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

    public function detail($id_offer){
        $offer = Offer::find($id_offer);
        return view('offers.detail', compact('offer'));
    }
}
