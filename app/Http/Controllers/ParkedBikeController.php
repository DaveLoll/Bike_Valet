<?php

namespace App\Http\Controllers;

use App\Biker;
use App\ParkedBike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function updateStatus($BikerID)
    {
        $ParkedBikedID = DB::table('ParkedBike')->where('Biker_ID', '=', $BikerID);

        $ParkedBike = new ParkedBike();
        $ParkedBike->Parked_Bike_ID = $ParkedBikedID->Parked_Bike_ID;
        $ParkedBike->Status = 'Checked Out';
        $ParkedBike -> save();

        return redirect('/splash');
    }

    public function  getCheckedInBikers()
    {
        $checkedInBikers = DB::table('Biker')
                            ->join('ParkedBike', 'Biker.Biker_ID', '=', 'ParkedBike.Biker_ID')
                            ->select('Biker.*')
                            ->where('ParkedBike.Status', '=', 'Checked_In');

        $checkedInBikes = DB::table('ParkedBike')->where('ParkedBike.Status', '=', 'Checked_In');
        $data = array('Biker' => $checkedInBikers,
                      'ParkedBike' => $checkedInBikes);
        return redirect('ListBikes', compact('checkedInBikers'));
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
