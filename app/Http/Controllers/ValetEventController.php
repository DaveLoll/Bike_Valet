<?php

namespace App\Http\Controllers;

use App\ValetEvent;
use Illuminate\Http\Request;

class ValetEventController extends Controller
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
     * @param  \App\ValetEvent  $valetEvent
     * @return \Illuminate\Http\Response
     */
    public function show(ValetEvent $valetEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ValetEvent  $valetEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(ValetEvent $valetEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ValetEvent  $valetEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ValetEvent $valetEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ValetEvent  $valetEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ValetEvent $valetEvent)
    {
        //
    }

    public function selectEventIndex()
    {
      $valetEvents = Valet_Event::all();
      return view('/', compact('valetEvents'));
    }
    public function selectEvent(Request $request, Event $events)
    {
      $selectedEvent = "";
      Trip::findOrFail($request->Event_ID)->update((['User_ID'=>$request->User_ID, 'Event_ID'=>$request->Event_ID]));
      return redirect('/splash');
    }
}
