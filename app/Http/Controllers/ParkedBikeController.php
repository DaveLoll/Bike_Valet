<?php

namespace App\Http\Controllers;

use App\Biker;
use App\ParkedBike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notifications\SendTicket;

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
        $biker = Biker::where('Biker_Phone_Number',$request->PhoneNumber) -> first();
//        echo $request->PhoneNumber;
//        echo "<br/>";
//        echo $biker->Biker_ID;
        $parkedBike = new ParkedBike();
        $parkedBike->Event_ID = 2;
        $parkedBike->Ticket = rand(1,100);
        $parkedBike->Tag_Number = $request->tag;
        $parkedBike->comment = null;
        $parkedBike->Biker_ID = $biker->Biker_ID;
        $parkedBike->Status = 'Checked In';
        $parkedBike->save();

        $biker->notify(new SendTicket('Your ticket is:' . $parkedBike->Ticket));
        return redirect('/checkin');
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

    public function updateStatus(request $request)
    {
        $Biker = Biker::find($request->BikerID);
        $ParkedBike = $Biker->Parked_Bike;
        //$ParkedBike = ParkedBike::find(8);

        //$ParkedBike = new ParkedBike();
        //$ParkedBike->Parked_Bike_ID = $ParkedBikedID->Parked_Bike_ID;

        $ParkedBike->Status = 'Checked Out';
        $ParkedBike -> save();

        return redirect('/ListBikes');
    }

    public function  getCheckedInBikers()
    {
        $checkedInBikers = DB::table('Biker')
                            ->join('Parked_Bike', 'Biker.Biker_ID', '=', 'Parked_Bike.Biker_ID')
                            ->select('Biker.*')
                            ->where('Parked_Bike.Status', '=', 'Checked In')->get();

        $checkedInBikes = DB::table('Parked_Bike')->where('Parked_Bike.Status', '=', 'Checked_In')->get();
        $data = array('Biker' => $checkedInBikers,
                      'Parked_Bike' => $checkedInBikes);
        return view('ListBikes', compact('checkedInBikers'));
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
