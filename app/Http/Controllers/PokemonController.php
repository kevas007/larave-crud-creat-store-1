<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function create(){
        return view('pages.form');
    }
    public function store(Request $request){
        $store = new Pokemon;
        $store->nom = $request->nom;
        $store->type = $request->type;
        $store->niveau = $request->niveau;
        $store->save();
        return redirect()->back();
        // return redirect('/');
    }
}
