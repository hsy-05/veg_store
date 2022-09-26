{{-- 活動頁面 --}}

@extends('pageHome')

@section('content')
    {{-- @can('admin')
        <div class="row float-right">
            <button type="button" class="btn btn-primary btn-margin">新增</button>
            <button type="button" class="btn btn-warning btn-margin">修改</button>
            <button type="button" class="btn btn-danger btn-margin">刪除</button>
        </div>
    @endcan --}}

    <div class="row row-cols-1 row-cols-md-3">
        @foreach ($news as $new)
        <div class="col">
            <div class="card h-100" style="width: 300px;">
                <div class="overflow-hidden">
                    <img src="{{ asset('/images/TEST.jpg') }}" class="card-img-top imageHov" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{!! $new->title !!}</h5>
                    <p class="card-text">{!! $new->subtitle !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <footer class="d-flex align-items-center justify-content-center row">
        {!! $news->links() !!}
        共{!! $news->total() !!}筆
    </div>
@endsection
