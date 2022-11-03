{{-- 新增文章 --}}
@extends('pageHome')

@section('content')

<div class="container">

        <form class="form-horizontal" action="{{ route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
            @method('POST')

            {{ csrf_field() }}

            <div class="d-flex justify-content-center" style="font-size: 28px; font-weight: bold; margin-bottom:20px ">新增活動</div>
            <div class="form-group">
                <label class="control-label col-md-4" for="title">標題：</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="請輸入標題..." name="title">
                </div>
            </div>
            @if ($news)
            <div class="form-group">
                <label class="control-label col-md-4" for="subtitle">內容：</label>
                <div class="col-md-4">
                    <textarea class="form-control" name="subtitle" rows="3" placeholder="請輸入內容..." ></textarea>

                </div>
            </div>

            @elseif ($posts)
            <div class="form-group">
                <label class="control-label col-md-4" for="price">價格：</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="請輸入標題..." name="price">
                </div>
            </div>
                <div class="form-group">
                <label class="control-label col-md-4" for="description">內容：</label>
                <div class="col-md-4">
                    <textarea class="form-control" name="description" rows="3" placeholder="請輸入內容..." ></textarea>

                </div>
            </div>
            </div>
            @endif

            <div class="form-group">
                <label class="control-label col-md-4">圖片：</label>
                <div class="col-md-4"> <input class="form-control b" type="file" name="image">
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
