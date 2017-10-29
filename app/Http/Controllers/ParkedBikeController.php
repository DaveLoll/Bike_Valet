<?php

namespace App\Http\Controllers;

use App\Biker;
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
    public function update(Request $request)
    {

    }

    public function updateStatus(Request $request)
    {
        $ParkedBike = new ParkedBike();
        $ParkedBike->Parked_Bike_ID = $request->Parked_Bike_ID;
        $ParkedBike->Status = 'Checked Out';
        $ParkedBike -> save();

        return redirect('/splash');
    }

    public function  getCheckOutInformation($ParkedBikeIDString)
    {
        $ParkedBikeInformation = ParkedBike::where('Parked_Biked_ID', $ParkedBikeIDString) -> first();
        $BikerInformation = Biker::where('Biker_ID', $ParkedBikeInformation->Biker_ID);
         return redirect('/CheckOut');

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
