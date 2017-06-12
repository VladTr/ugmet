<?php
//модель Заказ
namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';

    protected $fillable = [
        'user_id', 'product_id', 'status', 'description'
    ];
}
