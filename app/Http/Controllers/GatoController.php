<?php

namespace App\Http\Controllers;

use App\Clases\ObjetoGato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class GatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    public function corre()
    {
        return "el gato esta corriendo";
    }

    public function registrar() {

    //Intanciar o Construir un nuevo objecto de tipo gato
    // recibe los atributos
         $gato = new ObjetoGato(
            "iris",
            "naranja",
            "felino",
            "1 año"
        );
        // funciòn a ejecutar de la clase gato
        return $gato->registrar();
    }
}
