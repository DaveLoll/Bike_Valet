<?php

namespace App\Http\Controllers;

use App\Biker;
use App\ParkedBike;
use App\Event;
use Illuminate\Http\Request;
use App\Notifications\SendTicket;

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
    public function show(Request $request)
    {
        $biker = DB::select('select * from Biker where Phone_Number = ?', [$request->input('phone')]);
        return $biker->toJson();
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
        $biker->Biker_Email = $request->email;
        $biker->Biker_Zip = $request->Zipcode;
        $biker->Biker_First_Name = $request->FirstName;
        $biker->Biker_Last_Name = $request->LastName;
        $biker->Biker_Phone_Number = $request->PhoneNumber;
        $biker->save();

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
}
