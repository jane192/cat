<?php

use Illuminate\Database\Seeder;
use App\Maintext;

class Maintextseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new Maintext;
        $obj ->name ="Добро пожаловать на сайт";
        $obj->body ='текст';
        $obj->url='index';
        $obj->save();

    }
}
