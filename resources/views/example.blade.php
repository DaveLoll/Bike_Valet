@extends('layouts.master')
@section('title','Example Title')

@section('header')
    {{-- I linked this to the header JQuery mobile Icon documentation --}}
    <a href="https://api.jquerymobile.com/icons/" data-icon="">Left side header button</a>
    <h1>Header Title</h1>
    {{-- I linked this to the header JQuery mobile  header documentation --}}
    <a href="https://demos.jquerymobile.com/1.2.0/docs/toolbars/docs-headers.html" data-icon=""> Right side header button</a>
    {{-- if you choose to go without the header title but still want buttons
     span class="ui-title" /> --}}
@stop

@section('main')
    <p>This is the meat of your page, takes up the most space</p>
@stop

@section('footer')
    {{-- Works the same as header, below is an example of adding buttons multiple buttons left to right --}}
    <a href="#" data-icon="">header button one</a>
    <a href="#" data-icon="">header button two</a>
    {{-- I linked this to the header JQuery mobile footer documentation --}}
    <a href = "https://demos.jquerymobile.com/1.2.0/docs/toolbars/docs-footers.html" data-icon=""> link </a>
@stop
