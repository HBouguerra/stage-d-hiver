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
    public function index()
    {
        $commande = commande::all();
        return view('commande.index', ['commande'=> $commande]);

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

    public function edit(commande $commande)
    {

        return view('commande.edit',['commande' => $commande]);


    }

    public function update(commande $commande,Request $request)
    {

        $data = $request->validate([
            'num_commande' => 'required',
            'adresse' => 'required',
            'téléphone' => 'required',
        ]);
        $commande->update($data);
        return redirect(route('commande.index'))->with('success','commande update successfully');
    }

    public function delete(commande $commande)
    {
        $commande->delete();
        return redirect(route('commande.index'))->with('success','commande deleted succesfully');

    }
}
