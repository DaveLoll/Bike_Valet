@extends('layouts.master')
@section('title','Check Out')
    @stop

@section('header')
    <a href="" data-icon="arrow-l"></a>
    <h1>Check Out</h1>
@stop

@section('main')
    @if(count($ParkedBike) > 0)
    {!! Form::open(['action' => ['ParkedBikeController.update']]) !!}
    {{
    foreach (var $bike in $ParkedBike)
    {
        echo Form::radio('name', $bike);
    }
    }}
    {!! Form::submit('Check Out') !!}
    {!! Form::close() !!}

@stop

@section('footer')
@stop
