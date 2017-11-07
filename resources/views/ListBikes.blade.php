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


{{--@section('id', 'ListBike')--}}
    {{--@stop--}}
@section('header')
    <a href="#" data-icon="arrow-l"></a>
    <h1>Bikers</h1>
@endsection

{{--<h1>potato</h1>--}}
{{--{{count($checkedInBikers)}}--}}

@section('main')
    <script>
        $(document).ready(function() {
//            $("input[name$='BikerList']").click(function() {
//                var Biker = $(this).val();
//                $("#Checkout").show();
//            });
            console.log("javascript");
            $(".BikerList").click(function() {
                console.log("click");
                var Biker = $(this).val();
                console.log(Biker);
                $("#checkout").show();
            });
        });
    </script>
    @if(count($checkedInBikers) > 0)
        <form action="/splash" method="Post" data-ajax="false">
            {{csrf_field()}}
          @foreach($checkedInBikers as $Bike)
                <input class="BikerList" type="radio" name="BikerList" value="unchecked"> {{$Bike->Biker_First_Name ." ". $Bike->Biker_Last_Name}}<br>
          {{--<div data-role="panel" data-display="overlay" id="checkout">--}}
             {{--<div data-role="Header">--}}
                 {{--<a data-rel="back" data-icon="arrow-l"></a>--}}
                 {{--<h1>Biker</h1>--}}
             {{--</div>--}}
              {{--<div data-role="main" id="test">--}}
                  {{$Bike->Biker_First_Name}}
                  <br>
                  {{$Bike->Biker_Last_Name}}
                  <br>
                  {{$Bike->Biker_Phone_Number}}
                  <br>
                  <input type="submit" name="BikerID" id="CheckOut" value="{{$Bike->Biker_ID}}">
              {{--</div>--}}

          {{--</div>--}}
            {{--@section('extra')--}}
                {{--<div data-role="panel" data-display="overlay" id="checkout">--}}
                    {{--<div data-role="Header">--}}
                        {{--<a data-rel="back" data-icon="arrow-l"></a>--}}
                        {{--<h1>Biker</h1>--}}
                    {{--</div>--}}
                    {{--<div data-role="main" id="test">--}}
                        {{--{{$Bike->Biker_First_Name}}--}}
                        {{--<br>--}}
                        {{--{{$Bike->Biker_Last_Name}}--}}
                        {{--<br>--}}
                        {{--{{$Bike->Biker_Phone_Number}}--}}
                        {{--<br>--}}
                        {{--<input type="button" name="submit" id="CheckOut" value="{{$Bike->Biker_ID}}">--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--@stop--}}
            @endforeach
        </form>
     @endif
    @stop

@section('footer')
@stop

{{--@section('extra')--}}
    {{--<div data-role="panel" data-display="overlay" id="checkout">--}}
        {{--<div data-role="Header">--}}
            {{--<a data-rel="back" data-icon="arrow-l"></a>--}}
            {{--<h1>Biker</h1>--}}
        {{--</div>--}}
        {{--<div data-role="main" id="test">--}}
            {{--{{$Bike->Biker_First_Name}}--}}
            {{--<br>--}}
            {{--{{$Bike->Biker_Last_Name}}--}}
            {{--<br>--}}
            {{--{{$Bike->Biker_Phone_Number}}--}}
            {{--<br>--}}
            {{--<input type="button" name="submit" id="CheckOut" value="{{$Bike->Biker_ID}}">--}}
        {{--</div>--}}

    {{--</div>--}}
{{--@stop--}}


