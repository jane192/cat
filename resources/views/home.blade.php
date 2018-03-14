@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Товары</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form method ="post" action="{{asset('home/add')}}">
                   {!!csrf_field()!!}
  <div class="form-group">
    <label for="exampleInputName">Название</label>
    <input type="name" class="form-control" name="name" id="exampleInputName" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="catalog_id">Каталог</label>
    <select class="form-control" name="catalog_id" id="catalog_id">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
                </div>

  <div class="form-group">
   
   <textarea class="form-control" rows="3" name="description">Описание</textarea>
    <label for="exampleInputFile">Обзор</label>
    <input type="file" name ="picture" id="exampleInputFile">
   
  </div>
  
  <button type="submit" class="btn btn-default">Продолжить</button>
</form>
                </div>
        </div>
    </div>
</div>
@endsection
