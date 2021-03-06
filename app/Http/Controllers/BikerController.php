<?php

namespace App\Http\Controllers;

use App\Biker;
use App\ParkedBike;
use Illuminate\Http\Request;
use App\Notifications\SendTicket;
use DB;

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
        $biker = DB::select('select * from Biker where Biker_Phone_Number = ?', [$request->input('number')]);
        return json_encode($biker);
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
        $bikerCheck = DB::select('select * from Biker where Biker_Phone_Number = ?', [$request->input('phoneNumber')]);
        if($bikerCheck == null)
        {
            $biker = new Biker();
            $biker->Biker_Email = $request->email;
            $biker->Biker_Zip = $request->Zipcode;
            $biker->Biker_First_Name = $request->FirstName;
            $biker->Biker_Last_Name = $request->LastName;
            $biker->Biker_Phone_Number = $request->PhoneNumber;
            $biker->save();
            $id = $biker->Biker_ID;
        }
        else
        {
            $bikerCheck->Biker_Email = $request->email;
            $bikerCheck->Biker_Zip = $request->Zipcode;
            $bikerCheck->Biker_First_Name = $request->FirstName;
            $bikerCheck->Biker_Last_Name = $request->LastName;
            $bikerCheck->save();
            $id = $bikerCheck->Biker_ID;
        }

        $parkedBike = new ParkedBike();
        $parkedBike->Event_ID = session('EventID');
        $parkedBike->Ticket = rand(1,100);
        $parkedBike->Tag_Number = $request->tag;
        $parkedBike->comment = null;
        $parkedBike->Biker_ID = $id;
        $parkedBike->Status = 'Checked In';
        $parkedBike->save();

        $biker->notify(new SendTicket('Your ticket is:' . $parkedBike->Ticket));
        return redirect('/splash');
    }
}
