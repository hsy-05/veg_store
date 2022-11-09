{{-- 新增活動 --}}
@extends('pageHome')

@section('content')

<div class="container">

        <form class="form-horizontal" action="{{ route('admin.news.store')}}" method="POST" enctype="multipart/form-data">
            @method('POST')

            {{ csrf_field() }}

            <div class="d-flex justify-content-center" style="font-size: 28px; font-weight: bold; margin-bottom:20px ">新增活動</div>
            <div class="form-group">
                <label class="control-label col-md-4" for="title">標題：</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="請輸入標題..." name="title">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4" for="subtitle">內容：</label>
                <div class="col-md-4">
                    <textarea class="form-control" name="subtitle" rows="3" placeholder="請輸入內容..." ></textarea>

                </div>
            </div>

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
