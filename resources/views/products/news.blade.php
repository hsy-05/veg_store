@extends('pageHome')

@section('content')
    @can('admin')
        <div class="row float-right">
            <button type="button" class="btn btn-primary btn-margin">新增</button>
            <button type="button" class="btn btn-warning btn-margin">修改</button>
            <button type="button" class="btn btn-danger btn-margin">刪除</button>
        </div>
    @endcan

    <div class="row">
        @foreach ($news as $news)
            <div class="card" style="width: 18rem;">
                <div class="overflow-hidden">
                    <img src="{{ asset('/images/TEST.jpg') }}" class="card-img-top imageHov" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{!! $news->title !!}</h5>
                    <p class="card-text">{!! $news->subtitle !!}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
