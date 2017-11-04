<?php
/*
   Filename:     BikeCheckOut.Blade.php
   Creator:      Wilson Holland
   Create Date:  20171020
   Purpose:      Check Out Bike Page.
   Log:
                 20171010:     Initial file creation.//WH
                 20171027:     Updates to page
*/
?>

@extends('layouts.master')

@section('header')
    <a href="" data-icon="arrow-l"></a>
    <h1>Check Out</h1>
@stop

@section('main')
    <form action="/BikeCheckout" method="POST" data-ajax="false">
        {{ csrf_field() }}
        <button type="submit" data-ajax="false" class="btn btn-primary">Check Out</button>
    </form>

@stop

@section('footer')
@stop
