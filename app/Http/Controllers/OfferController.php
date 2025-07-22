<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Utilisateur;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function showOffers()
    {
        $offers = Offre::all();
        return view('User_Space.offers.index', compact('offers'));
    }
    public function showCreateFormOffers($id){
        $user = Utilisateur::find($id);
        return view('User_Space.offers.create',compact('user'));
    }
    public function publierOffer(Request $request){
        $validation = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'type' => 'required',
        ]);
        if ( $request->input('user_pass') ===  Utilisateur::where('id',$request->input('user_id'))->value('password')){
            $offer = new Offre();
            $offer->user_id = $request->input('user_id');
            $offer->name = $validation['name'];
            $offer->type = $validation['type'];
            $offer->technical_sheet = $request->input('technical_sheet');
            $offer->flyer = $request->input('flyer');
            $offer->price = $validation['price'];
            $offer->delivery_conditions = $request->input('delivery_options');
            $offer->store1_city = $request->input('store1_city');
            $offer->store2_city = $request->input('store2_city');
            $offer->created_at = NOW() ;
            $offer->updated_at = NOW() ;
            $offer->save();
            return redirect()->route('user.offers');
        }
    }
    public function showMyOffers($id){
        $offers = Offre::where('user_id',$id)->get();
        return view('User_Space.offers.index', compact('offers'));
    }
}
