<?php

namespace App\Http\Controllers;

use App\Models\Vakcine;
use Illuminate\Http\Request;

class VakcineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vakcine  $vakcine
     * @return \Illuminate\Http\Response
     */
    public function show(Vakcine $vakcine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vakcine  $vakcine
     * @return \Illuminate\Http\Response
     */
    public function edit(Vakcine $vakcine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vakcine  $vakcine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vakcine $vakcine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vakcine  $vakcine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vakcine $vakcine)
    {
        //
    }
}
