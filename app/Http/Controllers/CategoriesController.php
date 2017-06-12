<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // вывод соответсвующего вида в зависимости от выбранной категории
    public function show(Request $request){
        $cat = $request->id;

        switch ($cat){
            case 1:
                return view('rope');
                break;
            case 2:
                return view('category-wire-rope');
                break;
            case 6:
                return view('wire2688');
                break;
            case 7:
                return view('wire7668');
                break;
            case 8:
                return view('clamping-belt');
                break;
            case 9:
                return view('metal-polymer-cable');
                break;
            case 10:
                return view('spare-parts');
                break;
            default:
                $categories=Category::find($cat);
                if(!$categories){
                    return view('main');
                }
                $products = $categories->products;
                $res = json_encode($products);
                $products=$products->sortBy('carrying');
                return view('categories', ['products'=>$products, 'categories'=>$categories, 'res'=>$res]);
                break;
        }
    }
}
