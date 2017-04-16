<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Request $request){
        $url = asset('img/photo.jpg');
        $cat = $request->id;

        if ($cat==1){
            return view('rope');
        }

        if ($cat==8){
            return view('clamping-belt');
        }

        if ($cat==9){
            return view('metal-polymer-cable');
        }

        if ($cat==10){
            return view('spare-parts');
        }

        if ($cat==2){
            return view('category-wire-rope');
        }

        $categories=Category::find($cat);
        if(!$categories){
            return view('main');
        }
        $products = $categories->products;
        $res = json_encode($products);
        $products=$products->sortBy('carrying');
        return view('categories', ['products'=>$products, 'categories'=>$categories, 'res'=>$res]);
    }
}
