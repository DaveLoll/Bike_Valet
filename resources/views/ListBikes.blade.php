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
@section('title','List Bikes')
@stop


@section('id', 'ListBike')
    @stop
@section('header')
    <a href="#" data-icon="arrow-l"></a>
    <h1>Bikers</h1>
@stop

@section('main')
    <script>
        $(document).ready(function() {
            $("input[name$='BikerList']").click(function() {
                var Biker = $(this).val();
                $("#Checkout").show();
            });
        });
    </script>
    @if(count($Biker) > 0)
        <form action="" method="Get" data-ajax="false">
            {{csrf_field()}}
          @foreach($Biker as $Bike)
                <input type="radio" name="BikerList" value="unchecked"> {{$Biker->Bike->Biker_First_Name}} + " " + {{$Biker->Bike->Biker_Last_Name;}}<br>
          <div data-role="panel" data-display="overlay" id="checkout">
             <div data-role="Header">
                 <a data-rel="back" data-icon="arrow-l"></a>
                 <h1>Biker</h1>
             </div>
              <div data-role="main">
                  {{$Biker->Bike->Biker_First_Name;}}
                  <br>
                  {{$Biker->Bike->Biker_Last_Name;}}
                  <br>
                  {{$Biker->Bike->Biker_Phone_Number;}}
                  <br>
                  <input type="button" name="submit" id="CheckOut" value="{{$Biker->Bike->Biker_ID;}}">
              </div>

          </div>
                @endfor
        </form>
    @endif
@stop

@section('footer')
@stop


