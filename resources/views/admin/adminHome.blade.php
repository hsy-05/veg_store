{{-- 活動頁面 --}}

@extends('pageHome')

@section('content')
    <div class="container">
        <div style="margin-bottom: 15px">
            <button class="btn-info" id="adminNewBtn">
                活動
            </button>

            <button class="btn-info" id="adminProductBtn">
                商品
            </button>
        </div>
        <div id="adminNewsTb">
            <div style="font-size: 22px; font-weight:bold; text-align:center">
                活動
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">新增</a>
            </div>
            <table class="table table-hover text-center">
                <thead>
                    <tr class="table-info">
                        <th scope="col">#</th>
                        <th scope="col">圖片</th>
                        <th scope="col">標題</th>
                        <th scope="col">副標題</th>
                        <th scope="col">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($news as $new)
                        <tr>
                            <th scope="row">{!! $new->id !!}</th>
                            <td><img src="{{ asset('uploads/newsImage/' . $new->image) }}" style="width: 50px"></td>
                            <td>{!! $new->title !!}</td>
                            <td>{!! $new->subtitle !!}</td>
                            <td><a href="{{ route('admin.posts.edit', $new->id) }}" class="btn btn-warning">修改</a>
                            </td>
                        </tr>
                    @empty
                        <tr>`
                            <th>
                                沒有任何資料
                            </th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- 商品 --}}
        <div id="adminPtoductTb">
            <div style="font-size: 22px; font-weight:bold; text-align:center">商品</div>
            <table class="table table-hover">
                <thead>
                    <tr class="table-info">
                        <th scope="col">#</th>
                        <th scope="col">圖片</th>
                        <th scope="col">標題</th>
                        <th scope="col">副標題</th>
                        <th scope="col">操作</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse ($posts as $post)
                        <tr>
                            <th scope="row">1</th>
                            <td>{!! $post->id !!}</td>
                            <td>{!! $post->title !!}</td>
                            <td>{!! $post->image !!}</td>
                            <td>{!! $post->price !!}</td>
                            <td>{!! $post->description !!}</td>
                            <td>button1</td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                沒有任何資料
                            </th>
                        </tr>
                    @endforelse --}}
                </tbody>
            </table>
        </div>

    </div>
@endsection
