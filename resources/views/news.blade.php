@extends('layouts.base') @section('content')
<h2>Новости</h2>
@foreach($all as $one)
<div class="title_news"><a href="{{asset('news/'.$one->id)}}">{{$one->name}}</a>
    <img src="{{asset('uploads/thumb/'.$one->picture)}}" alt="{{$one->name}}">
    <h4>{{$one->body}}</h4>
</div>

@endforeach
<p>{!!$all->links()!!}</p>
@endsection
