<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvestitorResource;
use App\Models\Investitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvestitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investitori = Investitor::all();
        return InvestitorResource::collection($investitori);
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
     * @param  \App\Models\Investitor  $investitor
     * @return \Illuminate\Http\Response
     */
    public function show(Investitor $investitor)
    {
        return new InvestitorResource($investitor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investitor  $investitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Investitor $investitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investitor  $investitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investitor $investitor)
    {
        $validator = Validator::make($request->all(), [
            'firma' => 'required',
            'godOsnivanja' => 'required',
            'website' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $investitor->firma = $request->firma;
        $investitor->godOsnivanja = $request->godOsnivanja;
        $investitor->website = $request->website;

        $investitor->save();

        return response()->json(['Uspešno izmenjen investitor!', new InvestitorResource($investitor)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investitor  $investitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investitor $investitor)
    {
        $investitor->delete();
        return response()->json('Uspešno obrisan investitor!');
    }
}
