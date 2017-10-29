<?php
/*
   Filename:     ListBikes.blade.php
   Creator:      Wilson Holland
   Create Date:  20171024
   Purpose:      List in use Bikes.
   Log:
                 20171024:     Initial file creation.//WH
*/
?>

@extends('layouts.master')
@section('title','Check Out')
@stop

@section('header')
    <a href="#" data-icon="arrow-l"></a>
    <h1>Bikes Checked In</h1>
@stop

@section('main')
    {{$Biker= App\Biker::with('Biker_First_Name', 'Biker_Last_Name')->get(); }}
    @if(count($Biker) > 0)
        <form action="/GetCheckoutInformation" method="Post" data-ajax="false">
          @foreach($Biker as $Bike)
                <input type="radio" name="BikerList" value="unchecked" onchange="this.form.submit();">{{echo $Biker->Bike->Biker_First_Name + $Biker->Bike->Biker_Last_Name;}}<br>
          @endfor
        </form>
    @endif
@stop

@section('footer')
@stop
