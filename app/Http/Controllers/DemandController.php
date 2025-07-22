<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use App\Models\Offre;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    public function showCreateFormDemand(){
        return view('User_Space.offers.create');
    }
    public function publierDemand(Request $request){
        $validation = $request->validate([

        ]);
        if ( $request->input('password') ===  Utilisateur::where('id',$request->input('user_id'))->value('password')){
            $demande = new Demand();
            $demande->user_id = $request->input('user_id');
            $demande->name = $validation['name'];
            $demande->type = $validation['type'];
            $demande->created_at = NOW() ;
            $demande->updated_at = NOW() ;
            $demande->save();
            return redirect()->route('user.demands');
        }
    }
    public function showMyOffers($id){
        $offers = Offer::where('user_id', $id)->get();
        return view('User_Space.offers.index', compact('offers'));
    }
}
