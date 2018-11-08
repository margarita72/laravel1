<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public static function incomplete(){
    	return static::where('completed', 0)->get(); //модель описывает вывод на экран тех строк что удовлетворяют условию поле completed равен 0, т.е. false
    }
}
