<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use App\Models\Canditato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Vacante $vacante)
    {
        //
        return view('candidatos.index', [
            'vacante' => $vacante
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canditato  $canditato
     * @return \Illuminate\Http\Response
     */
    public function show(Canditato $canditato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canditato  $canditato
     * @return \Illuminate\Http\Response
     */
    public function edit(Canditato $canditato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Canditato  $canditato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canditato $canditato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canditato  $canditato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canditato $canditato)
    {
        //
    }
}
