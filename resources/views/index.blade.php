@extends('layouts.base') @section('styles') @parent
<link href="main_page.css" rel="stylesheet"> @stop @section('content')
<h3> {{$text->name}}</h3>
<img src="{{asset(isset($acc->picture)?
'uploads/thumb/'.$acc->picture:
'uploads/thumb/no-pic.jpg')}}" alt=""> {!!$text->body!!} @endsection
