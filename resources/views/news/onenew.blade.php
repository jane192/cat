@extends('layouts.base') @section('content')

<h2>{{$r->name}}</h2>

<div class="title_news">
    <img src="{{asset('uploads/thumb/'.$r->picture)}}" alt="{{$r->name}}">
    <p>{{$r->body}}</p>
    <p>{{$r->preview}}</p>
    <a href="{{asset('/news')}}" class="btn btn-default">Назад</a>
</div>

@endsection
