{{-- 活動頁面 --}}

@extends('pageHome')

@section('content')
    <div class="container">
        <div style="margin-bottom: 15px">
            <button class="btn btn-info" id="adminNewBtn" style="background-color: #99e5d2">
                活動
            </button>

            <button class="btn btn-info " id="adminProductBtn">
                商品
            </button>
        </div>
        <div id="adminNewsTb">
            <div style="font-size: 28px; font-weight:bold; text-align:center">活動</div>
            <div style="text-align: right; margin-bottom:15px"><a href="{{ route('admin.posts.create') }}"
                    class="btn btn-primary">新增</a></div>
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
                                   <button name="returnBtn" type="input" onclick="location.href='{{ route('admin.posts.edit', $new->id) }}'" value="newBtnval" >修改</button>

                                    <form action="{{ route('admin.posts.destroy', $new->id) }}" method="POST">
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
                <div class="alert alert-success alertMsg" style="display:none;">
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
        <div id="adminPtoductTb" style="display: none">
            <div style="font-size: 22px; font-weight:bold; text-align:center">商品</div>
            <div style="text-align: right; margin-bottom:15px"><a href="{{ route('admin.posts.create') }}"
                    class="btn btn-primary">新增</a></div>
            <table class="table table-hover">
                <thead>
                    <tr class="table-info">
                        <th scope="col">#</th>
                        <th scope="col">圖片</th>
                        <th scope="col">標題</th>
                        <th scope="col">價格</th>
                        <th scope="col">副標題</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <th scope="row">{!! $post->id !!}</th>
                            <td>{!! $post->title !!}</td>
                            <td><img src="{{ asset('uploads/newsImage/' . $new->image) }}" style="width: 50px"></td>
                            <td>{!! $post->price !!}</td>
                            <td>{!! $post->description !!}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                   <button name="returnBtn" type="input" onclick="location.href='{{ route('admin.posts.edit', $new->id) }}'" value="newBtnval" >修改</button>

                                    <form action="{{ route('admin.posts.destroy', $new->id) }}" method="POST">
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
