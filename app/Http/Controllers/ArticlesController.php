<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
   public function show(){
       $articles=Article::all();
       //dd($articles);
       return view('articles',['articles'=>$articles]);
   }
}
