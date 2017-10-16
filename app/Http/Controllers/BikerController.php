<?php

namespace App\Http\Controllers;

use App\Biker;
use App\ParkedBike;
use App\Event;
use Illuminate\Http\Request;

class BikerController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function show(Biker $biker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function edit(Biker $biker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biker $biker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biker  $biker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biker $biker)
    {
        //
    }

    public function createBikerAndCheckin(Request $request)
    {
        $biker = new Biker();
        $biker->
        $parkedBike = new ParkedBike();
    }
}
