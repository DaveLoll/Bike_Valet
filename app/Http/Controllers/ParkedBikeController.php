<?php

namespace App\Http\Controllers;

use App\ParkedBike;
use App\Biker;
use Illuminate\Http\Request;
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
