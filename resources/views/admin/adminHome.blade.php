{{-- 活動頁面 --}}

@extends('pageHome')

@section('content')
    <div class="text-center" style="border-color:black;border-style: solid;height:620px">
        <div class="text-center" style="font-size: 28px; font-weight:bold;background-color:black;color:white">後臺管理系統</div>
        <aside class="sidenav">
            <ul style="padding-left:0%">
                <button data-target="#SubMenu1" data-toggle="collapse" id="adminNewBtn">活動</button>
                  <ul class="collapse nav nav-sub" id="SubMenu1">
                    <li><a href="/blank"><i class="fa fa-shield"></i> Blank</a></li>
                    <li><a href="/login"><i class="fa fa-shield"></i> Login</a></li>
                    <li><a href="/contact"><i class="fa fa-shield"></i> Contact</a></li>
                  </ul>
              </ul>
            <button id="adminProductBtn">
                商品
            </button>

        </aside>

        <div id="adminNewsTb" class="mainDiv">
            <div style="font-size: 28px; font-weight:bold; text-align:center">活動
                <a href="{{ route('admin.news.create') }}" class="btn btn-primary"
                    style="text-align: right;float:right; margin:5px">新增</a>
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
                            {{-- 按鈕 --}}
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button name="returnBtn" type="input" class="btn btn-warning"
                                        onclick="location.href='{{ route('admin.news.edit', $new->id) }}'"
                                        style="margin-right: 5px;" value="newBtnval">修改</button>

                                    <form action="{{ route('admin.news.destroy', $new->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('確定刪除嗎？')"
                                            class="deleteBtn">刪除</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                沒有任何資料
                            </th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <footer class="d-flex align-items-center justify-content-center row">
                {!! $news->links() !!}
                共{!! $news->total() !!}筆
            </footer>
            @if (\Session::has('deleteSuc'))
                <div class="alert alert-warning alertMsg" style="display:none;">
                    <ul>
                        <li>{!! \Session::get('deleteSuc') !!}</li>
                    </ul>
                </div>
            @endif
            @if (\Session::has('saveSuc'))
                <div class="alert alert-success alertMsg" style="display:none;">
                    <ul>
                        <li>{!! \Session::get('saveSuc') !!}</li>
                    </ul>
                </div>
            @endif
        </div>
        </footer>
        {{-- 商品 --}}
        <div id="adminPtoductTb" style="display: none" class="mainDiv">

            <div style="font-size: 28px; font-weight:bold; text-align:center">商品
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary"
                    style="text-align: right;float:right; margin:5px">新增</a>
            </div>
            <table class="table table-hover text-center">
                <thead>
                    <tr class="table-info">
                        <th scope="col">#</th>
                        <th scope="col">圖片</th>
                        <th scope="col">標題</th>
                        <th scope="col">價格</th>
                        <th scope="col">副標題</th>
                        <th scope="col">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <th scope="row">{!! $post->id !!}</th>
                            <td>{!! $post->title !!}</td>
                            <td><img src="{{ asset('uploads/postsImage/' . $post->image) }}" style="width: 50px"></td>
                            <td>{!! $post->price !!}</td>
                            <td>{!! $post->description !!}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button name="returnBtn" type="input"
                                        onclick="location.href='{{ route('admin.posts.edit', $post->id) }}'"
                                        class="btn btn-warning" value="postBtnval" style="margin-right: 5px;">修改</button>

                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('確定刪除嗎？')"
                                            class="deleteBtn">刪除</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                沒有任何資料
                            </th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
