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
        $vakcine = Vakcine::paginate();
        return response()->json($vakcine, 200);
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

        $request->validate([
            'ime'=> 'required|min:3',
            'kolicina' => 'required',
            'efikasnost' => 'required',
            'porijeklo' => 'required',
        ]);

        $vakcine = new Vakcine();
        $vakcine->ime = $request->ime;
        $vakcine->kolicina = $request->kolicina;
        $vakcine->efikasnost = $request->efikasnost;
        $vakcine->porijeklo = $request->porijeklo;

        if($vakcine->save()){
            return response()->json($vakcine, 200);
        }else {
            return response()->json($vakcine, 500);
        }
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
