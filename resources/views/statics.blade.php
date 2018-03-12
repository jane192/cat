@extends('layouts.base')
@section('content')

    <h2>Статьи</h2>
@foreach($all as $one)
    <h3><a href="{{asset($one->url)}}"> {{$one->name}}</a></h3>
    @endforeach
    <p align='center'>{!!$all->links()!!}</p>
@endsection