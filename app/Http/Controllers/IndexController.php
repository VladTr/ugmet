<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(){
        $categories=Category::all();
        return view('main');
    }
}
