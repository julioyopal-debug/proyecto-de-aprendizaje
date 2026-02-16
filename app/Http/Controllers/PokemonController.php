<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //TODO:: 1. Definir ruta en api.php - /routes
        //usar guzzle para hacer peticiòn a pokemon
        // recorrer los resultados de pokemon e imprimir los nombres con echo
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0');
        $datosPokemon = $response->json();
      return $response->json();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
