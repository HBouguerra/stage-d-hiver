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
    public function index()
    {
        $restaurant = restaurant::all();
        return view('restaurants.index', ['restaurant'=> $restaurant]);

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

    public function edit(restaurant $restaurant)
    {

        return view('restaurants.edit',['restaurant' => $restaurant]);
    }

    public function update(restaurant $restaurant,Request $request)
    {

        $data = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'téléphone' => 'required',
        ]);
        $restaurant->update($data);
        return redirect(route('restaurant.index'))->with('success','restaurant update successfully');
    }


    public function delete(restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect(route('restaurant.index'))->with('success','restaurant deleted succesfully');

    }



}
