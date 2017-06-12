<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    // метод демонстрации корзины
    public function showCart(){
        $productsForCart=array();
        // если корзина не пустаполучаем все id товаров
        if(isset($_COOKIE['basket'])){
            $chosenItemsId=[];
            $products=json_decode($_COOKIE['basket']);
            foreach ($products as $product){
                $chosenItemsId[]=$product->id;
            }
            $chosenItemsId=array_unique($chosenItemsId);
            //формируем массив товаров по выбранным id из базы данных
            $productsFromDb=Product::all()->whereIn('id', $chosenItemsId);

            foreach ($products as $product){
                foreach ($productsFromDb as $productFromDb){
                    if ($productFromDb->id==$product->id){
                        $product->price=$productFromDb->price; // цену получаем из базы данных!
                    }
                }
                array_push($productsForCart, $product);
            }
        }
        return view('cart',['products'=>$productsForCart]);
    }
}
