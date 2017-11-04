<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
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
    $event = new Event;
    $event->name = $request->Event_Name;
    $event->save();

    return redirect('/');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Event  $event
   * @return \Illuminate\Http\Response
   */
  public function show($Event_ID)
  {
    $event = Event::findOrFail($Event_ID);

    return view('selectEvent.show', compact('event'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Event  $event
   * @return \Illuminate\Http\Response
   */
  public function edit(Event $event)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Event  $event
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Event $event)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Event  $event
   * @return \Illuminate\Http\Response
   */
  public function destroy(Event $event)
  {
    //
  }

  public function selectEventIndex()
  {
    $events = Event::all();
    return view('selectEvent', compact('events'));
  }

}
