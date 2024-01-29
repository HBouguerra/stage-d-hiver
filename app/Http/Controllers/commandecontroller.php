<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\commande;
use Illuminate\Http\Request;

class commandecontroller extends Controller
{
    public function create(){
        return view('commande.create');
    }
    public function store(Request $request){
        $request->validate([
            'num_commande' => 'required',
            'adresse' => 'required',
            'téléphone' => 'required',
        ]);

        commande::create([
            'num_commande' => $request->num_commande,
            'adresse' => $request->adresse,
            'téléphone' => $request->téléphone,
        ]);
        return redirect()->route('commande.create')->with('success', 'Commande created successfully!');

    }
}
