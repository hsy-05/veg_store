<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Post;

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

        $news = News::paginate(6);  //每5個資料作為一頁
        return view('products.news', compact('news'));
    }

    public function indexVeg()
    {
        // $news = News::all();
        // return view('products.news', compact('news'));

        $posts = Post::paginate(6);  //每5個資料作為一頁
        return view('products.veg', compact('posts'));
    }

    public function indexAdminHome()
    {
        //get 方法會回傳一個結果陣列
        //compact：變量的名字，將變數轉換成結合陣列的 key => value
        $this->authorize('admin');
        $news = News::orderBy('id')->get();
        $news = News::paginate(10);  //每5個資料作為一頁

                //get 方法會回傳一個結果陣列
        //compact：變量的名字，將變數轉換成結合陣列的 key => value

        $posts = Post::orderBy('id')->get();
        $posts = Post::paginate(10);  //每5個資料作為一頁


        return view('admin.adminHome',  compact('news','posts'));
    }



}
