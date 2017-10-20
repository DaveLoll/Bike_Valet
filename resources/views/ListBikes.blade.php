@extends('layouts.master')
@section('title','Check Out')
@stop

@section('header')
    <a href="" data-icon="arrow-l"></a>
    <h1>View Check In</h1>
@stop

@section('main')
    @if(count($ParkedBike) > 0)
        {!! Form::open(['action' => ['ParkedBikeController.Read]]) !!}
        {{
        $count = 0;
        foreach (var $bike in $ParkedBike)
        {
            echo Form::radio('name', $bike);
            $count++;
        }
        }}
        {!! Form::close() !!}
    @endif
    <div data-role="panel" id="menu" data-position="left" data-display="overlay">
        <h1> {{echo  $ParkedBike[$count].name}}</h1>
        <h3>{{echo  $ParkedBike[$count].PhoneNumber}}</h3>
        <h5>{{echo  $ParkedBike[$count].email}}</h5>
        <h3>{{echo  $ParkedBike[$count].tagNumber}}</h3>
    </div>
@stop

@section('footer')
@stop
