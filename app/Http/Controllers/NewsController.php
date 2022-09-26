<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {

        //get 方法會回傳一個結果陣列
        //compact：變量的名字，將變數轉換成結合陣列的 key => value
        $this->authorize('admin');
        $news = News::orderBy('id')->get();
        return view('admin.adminHome', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('admin.posts.create', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.posts.edit', compact('news'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('admin');
        // 如果路徑不存在，就自動建立
        if (!file_exists('uploads/newsImage')) {

            // mkdir() 函數創建目錄。
            // 若成功，則返回 true，否則返回 false。
            // mkdir(path,mode,recursive,context)
            // path	必需。規定要創建的目錄的名稱。
            // mode	必需。規定權限。默認是 0777。
            // recursive	必需。規定是否設置遞歸模式。
            // context	必需。規定文件句柄的環境。Context 是可修改流的行為的一套選項。

            mkdir('uploads/newsImage', 0755, true);
        }

        $news = News::find($id);

        if ($request->hasFile('image')) {
            // 先刪除原本的圖片
            if ($news->image != 'default.jpg')
                @unlink('uploads/newsImage/' . $news->image);
            $file = $request->file('image');
            $path = public_path() . '\uploads\newsImage\\';
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);

            $news->image = $fileName;
        }
        $news->title = $request->input('title');
        $news->subtitle = $request->input('subtitle');

        $news->save();

        return redirect()->route('adminHome');

        }
    }
