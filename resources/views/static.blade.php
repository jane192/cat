@extends('layouts.base')
@section('content')

    <h3>{{$text->name}}</h3>
    {!! $text->body !!}
@endsection