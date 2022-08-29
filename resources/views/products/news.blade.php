@extends('pageHome')

@section('content')

@can('admin')
    <div class="row float-right">
        <button type="button" class="btn btn-primary btn-margin">新增</button>
        <button type="button" class="btn btn-warning btn-margin">修改</button>
        <button type="button" class="btn btn-danger btn-margin">刪除</button>
    </div>
@endcan

<div class="card" style="width: 18rem;">
    <div class="overflow-hidden">
        <img src="{{ asset('/images/TEST.jpg') }}" class="card-img-top imageHov" alt="...">
    </div>
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

@endsection






