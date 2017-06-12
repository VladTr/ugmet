<?php
// модель Продукт
namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';

    // устанавливаем связь продукт - категория
    public function category(){
        return $this->belongsTo('App\Category');
    }

}
