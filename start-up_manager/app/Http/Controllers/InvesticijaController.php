<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvesticijaResource;
use App\Models\Investicija;
use Illuminate\Http\Request;

class InvesticijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investicije = Investicija::all();
        return InvesticijaResource::collection($investicije);
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
     * @param  \App\Models\Investicija  $investicija
     * @return \Illuminate\Http\Response
     */
    public function show(Investicija $investicija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investicija  $investicija
     * @return \Illuminate\Http\Response
     */
    public function edit(Investicija $investicija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investicija  $investicija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investicija $investicija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investicija  $investicija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investicija $investicija)
    {
        $investicija->delete();
        return response()->json('Uspešno obrisana investicija!');
    }
}
