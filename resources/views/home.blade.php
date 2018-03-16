@extends('layouts.app')
@section('scripts')
 @parent
<script src="{{asset('public/js/delete.js')}}"></script>
@endsection
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

                   <form method ="post" action="{{asset('home/add')}}" enctype="multipart/form-data">
                   {!!csrf_field()!!}
  <div class="form-group">
    <label for="exampleInputName">Название</label>
    <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="catalog_id">Каталог</label>
    <select class="form-control" name="catalog_id" id="catalog_id">
    @foreach($cats as $one)
    <option value="{{$one->id}}">{{$one->name}} </option>
    @endforeach
  
</select>
                </div>

  <div class="form-group">
  <label for="exampleInputPrice">Price</label>
    <input type="text" class="form-control" name="price" id="exampleInputPrice" placeholder="Price">
   <label for="exampleInputProduct_code">Product code</label>
    <input type="text" class="form-control" name="product_code" id="exampleInputProduct_code" placeholder="Product code">
    <label for="exampleInputDescription">Description</label>
   <textarea class="form-control" rows="3" name="body">Описание</textarea>
    <label for="exampleInputFile">Обзор</label>
    <input type="file" name ="picture" id="exampleInputFile">
   
  </div>
  
  <button type="submit" class="btn btn-default">Сохранить</button>
</form>
                </div>
                @include('templates.products')
        </div>
        
    </div>
</div>

@endsection
