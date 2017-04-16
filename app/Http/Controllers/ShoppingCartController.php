<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function showCart(){
        $productsForCart=array();
        if(isset($_COOKIE['basket'])){
            $chosenItemsId=[];

            $products=json_decode($_COOKIE['basket']);
            foreach ($products as $product){
                $chosenItemsId[]=$product->id;
            }
            $chosenItemsId=array_unique($chosenItemsId);
            $productsFromDb=Product::all()->whereIn('id', $chosenItemsId);

            foreach ($products as $product){
                foreach ($productsFromDb as $productFromDb){
                    if ($productFromDb->id==$product->id){
                        $product->price=$productFromDb->price;
                    }
                }
                array_push($productsForCart, $product);
            }
        }

        return view('cart',['products'=>$productsForCart]);
    }
}
