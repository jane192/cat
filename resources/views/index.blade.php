@extends('layouts.base')
@section('styles')
    @parent
    <link href="main_page.css" rel="stylesheet">
    @stop
@section('content')
    <h3>  {{$text->name}}</h3>

    {!!$text->body!!}
@endsection