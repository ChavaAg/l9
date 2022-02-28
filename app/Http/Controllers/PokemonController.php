<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemones = Pokemon::all();
        return view('pokemon.indexPokemon', compact('pokemones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pokemon.formPokemon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'nombre'=>'required|min:3|max:15',
            'descripcion'=>'required|min:10|max:125',
            'tipo'=>'required',
        ]);

        $pokemon = new Pokemon();
        $pokemon->nombre = $request->nombre;
        $pokemon->tipo = $request->tipo;
        $pokemon->descripcion = $request->descripcion;
        $pokemon->save();

        return redirect('/pokemon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        return view('pokemon/showPokemon', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        return view('pokemon.formPokemon', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        $request->validate([
            'nombre'=>'required|min:3|max:15',
            'descripcion'=>'required|min:10|max:125',
            'tipo'=>'required',
        ]);

        $pokemon->nombre = $request->nombre;
        $pokemon->tipo = $request->tipo;
        $pokemon->descripcion = $request->descripcion;
        $pokemon->save();

        return redirect('/pokemon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return redirect('/pokemon');
    }
}
