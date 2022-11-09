<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    // ----------------------------------------新增-------------------------------------------

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        $news = "news";
        return view('admin.news.create', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        if (!file_exists('uploads/newsImage')) {
            mkdir('uploads/newsImage', 0755, true);
        }

        $new = new News;

        //圖片上傳的路徑
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path('\uploads\newsImage\\'); //取得 public 目錄的完整路徑
            $fileName = time() . '.' . $file->getClientOriginalExtension(); //取得上傳檔案的副檔名
            $file->move($path, $fileName);
        } else {
            $fileName = 'default.jpg';
        }
        $new->title = $request->input('title');
        $new->subtitle = $request->input('subtitle');
        $new->image = $fileName;

        $new->save();

        return redirect()->route('adminHome')->with('saveSuc', '新增成功！');
    }

    // ----------------------------------------修改-------------------------------------------

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
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
            $path = public_path('\uploads\newsImage\\');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);

            $news->image = $fileName;
        }
        $news->title = $request->input('title');
        $news->subtitle = $request->input('subtitle');

        $news->save();

        return redirect()->route('adminHome');
    }

    // ---------------------------------------刪除--------------------------------------------
        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::find($id);
        if ($new->image != 'default.jpg')
            @unlink('uploads/newsImage/' . $new->image);
        $new->delete();
        return redirect()->back()->with('deleteSuc', '刪除成功！');
    }
}
