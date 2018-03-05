<?php
?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'app.title') }}</title>
    <meta name="description" content="{{config('app.description')}}">
    <meta name ="keywords" content="{{config('app.keywords')}}">
    @section('styles')
    <link rel="stylesheet" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/style.css')}}">
        @show

</head>
<body>
<header id="header">
    <div class="logo">
        <img class="foto" src="{{asset('public/img/photo.jpg')}}" alt="один">
    </div>
    <h1 class="logotext">Название</h1>
    <nav class="menutop">

        <a href="#">Главная</a>(
        <a href="#">Новости</a>
        <a href="#">Контакты</a>
        <a href="#">Вопросы и Ответы</a>
        <a href="#">Картинки</a>

    </nav>

</header>
<main><div class="one col-md-2 col-xs-12"><h2>Меню</h2>
        <a href="#" class="btn btn-block btn-primary">Разработка сайтов</a>
        <a href="#" class="btn btn-block btn-warning">Тестирование</a>
        <a href="#" class="btn btn-block btn-danger">Продвижение</a>
        <a href="#" class="btn btn-block btn-info">Музыка</a>
        <a href="#" class="btn btn-block btn-success">Видео</a>
    </div>
    <div class="two col-md-8 col-xs-12">
        @yield('content')
    </div>
    <div class="col-md-2 col-xs-12">Виджеты
        <!--pogoda.by-->
        <!--Информер распространяется свободно и на безвозмездной основе. Однако, в случае изменения кода информера (в частности, удаления ссылок), POGODA.BY снимает с себя ответственность за конечный результат.-->

        <table width="100%" height="180" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="2" cellspacing="0">
            <tr><td><a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
                </td></tr>
            <tr><td>

                    <table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
                        <tr><td>
                                <script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_3.js"></script>
                            </td></tr>
                    </table>

                </td></tr>

            <tr><td align="right">Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
                </td></tr>
        </table>
    </div>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</main>
<footer class="footer"><span>&copy Copyright</span>
    <a href="mailto:filipchick.yaugenia@yandex.by">Отправка</a>
</footer>
</body>
</html>
