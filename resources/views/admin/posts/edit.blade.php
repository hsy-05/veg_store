@extends('pageHome')

@section('content')
    <div class="container">
        <form class="form-horizontal" action="{{ route('admin.posts.update',  $news->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label class="control-label col-md-4" for="title">標題：</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="請輸入標題..." name="title" value="{{ $news->title }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4" for="email">內容：</label>
                <div class="col-md-6">
                    <textarea class="form-control" name="subtitle" rows="3" placeholder="請輸入內容..." >{{ $news->subtitle }}</textarea>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4">圖片：</label>
                <div class="col-md-6"> <input class="form-control b" type="file" name="image">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                       送出
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection
