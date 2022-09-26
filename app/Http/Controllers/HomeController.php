<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexNews()
    {
        // $news = News::all();
        // return view('products.news', compact('news'));

        $news = News::paginate(2);  //每5個資料作為一頁
        return view('products.news', compact('news'));
    }


}
