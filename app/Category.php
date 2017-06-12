<?php
// модель Категории
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';

    // устанавливаем связь категория -> продукт  / один -> ко многим
    public function products(){
        return $this->hasMany('App\Product');
    }


}
