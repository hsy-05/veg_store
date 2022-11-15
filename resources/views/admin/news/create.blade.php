{{-- 新增活動 --}}
@extends('pageHome')

@section('content')

<div class="flex-container">

        <form action="{{ route('admin.news.store')}}" method="POST" enctype="multipart/form-data">
            @method('POST')

            {{ csrf_field() }}

            <div class="d-flex justify-content-center" style="font-size: 28px; font-weight: bold; margin-bottom:20px ">新增活動</div>
            <div class="row mb-3 justify-content-center">
                <label class="col-sm-2 col-form-label" for="type">公告類型：</label>
               <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="請輸入公告類型..." name="type">
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <label class="col-sm-2 col-form-label" for="title">標題：</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="請輸入標題..." name="title">
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <label class="col-sm-2 col-form-label" for="subtitle">內容：</label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="subtitle" rows="3" placeholder="請輸入內容..." ></textarea>

                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                <label class="col-sm-2 col-form-label">圖片：</label>
                <div class="col-sm-5"><input class="form-control b" type="file" name="image">
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                <div class="col-md-5 offset-md-6">
                    <button type="submit" class="btn btn-primary">
                       送出
                    </button>
                </div>
            </div>
        </form>

</div>


@endsection
