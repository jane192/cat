<table class="table table-bordered table-striped" width="100%">

    <tr>
        <td width="200px">Фото</td>
        <td>Название</td>
        <td>Код продукта</td>
        <td>Цена</td>
        <td>Действие</td>
    </tr>
    @foreach($products as $one)




    <tr>
        <td width="200">
            <a href="#" class="link" data_id="{{asset($one['id']) }}"><img
                                        src="{{asset('load/'.$one->picture)}}" alt=" " width=200px></a>

        </td>
        <td>
            <?=$one['name']; ?>
        </td>
        <td>
            <?=$one['product_code']; ?>
        </td>
        <td>
            <?=$one['price']; ?>
        </td>
        <td>
            <a href="#" class="btn btn-default" onClick="delete_position('/home/delete/{{$one->id}}','Вы действительно хотите удалить?')">Удалить</a>
            <a href="{{asset('home/edit/'.$one->id)}}" class="btn btn-default">Редактировать</a>
<<<<<<< HEAD

=======
            <a href="#" class="btn btn-default" onClick="delete_position('/home/deleteImage/{{$one->id}}','Вы действительно хотите удалить изображение?')">Удалить изображение</a>
>>>>>>> 2a4b856d3d950dd8166a2d7fa4e04b5161e171bf
        </td>
    </tr>
    @endforeach
</table>
<p align="center">
    {!!$products->links();!!}
</p>
