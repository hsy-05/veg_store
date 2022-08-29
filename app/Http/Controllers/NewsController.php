<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function indexNews()
    {
        $news = News::all();
        return view('products.news', compact('news'));
    }

}
