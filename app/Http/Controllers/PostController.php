<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        $posts = "posts";
        return view('admin.posts.create', compact('posts'));
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
        if (!file_exists('uploads/newsImage'))
            mkdir('uploads/newsImage', 0755, true);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = public_path('\uploads\newsImage\\'); //取得 public 目錄的完整路徑
            $fileName = time() . '.' . $file->getClientOriginalExtension(); //取得上傳檔案的副檔名
            $file->move($path, $fileName);
        }else{
            $fileName = 'default.jpg';
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->price = $request->input('price');
        $post->description = $request->input('description');

        $post->save();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {

        $this->authorize('admin');
        $posts = Post::find($id);
        $news = News::find($id);
        $reqBtn = $request->input('returnBtn');
        return view('admin.posts.edit', compact('posts', 'news','reqBtn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
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

        $news = Post::find($id);

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
