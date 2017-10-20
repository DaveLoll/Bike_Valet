<?php

namespace App\Http\Controllers;

use App\ParkedBike;
use Illuminate\Http\Request;

class ParkedBikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

   /** public function getBikesCheckOut()
    {
        $checkedoutBikes = table('Parked_Bike')->where('status', 'checkedIn')->pluck('ticketNum', 'Name');
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
     * @param  \App\ParkedBike  $parkedBike
     * @return \Illuminate\Http\Response
     */
    public function show(ParkedBike $parkedBike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ParkedBike  $parkedBike
     * @return \Illuminate\Http\Response
     */
    public function edit(ParkedBike $parkedBike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParkedBike  $parkedBike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParkedBike $parkedBike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParkedBike  $parkedBike
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParkedBike $parkedBike)
    {
        //
    }
}
