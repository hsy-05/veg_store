{{-- 新增文章 --}}
@extends('pageHome')

@section('content')
    <div class="flex-container">

        <form class="form-horizontal" action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @method('POST')

            {{ csrf_field() }}

            <div class="d-flex justify-content-center" style="font-size: 28px; font-weight: bold; margin-bottom:20px ">新增蔬菜
            </div>
            <div class="form-group">
                <label class="control-label" for="title">標題：</label>
                <div>
                    <input type="text" class="form-control" placeholder="請輸入標題..." name="title">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="price">價格：</label>
                <div>
                    <input type="text" class="form-control" placeholder="請輸入價格..." name="price">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="description">內容：</label>
                <div>
                    <textarea class="form-control" name="description" rows="3" placeholder="請輸入內容..."></textarea>

                </div>
            </div>

            <div class="form-group">
                <label class="control-label">圖片：</label>
                <div> <input class="form-control b" type="file" name="image">
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
