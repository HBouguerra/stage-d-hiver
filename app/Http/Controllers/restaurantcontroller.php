<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;

class restaurantcontroller extends Controller
{
    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'téléphone' => 'required',
        ]);

        // Debugging statements
        // dd($request->all());

        Restaurant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'téléphone' => $request->téléphone,
        ]);

        return redirect()->route('restaurants.create')->with('success', 'Restaurant created successfully!');
    }
}
