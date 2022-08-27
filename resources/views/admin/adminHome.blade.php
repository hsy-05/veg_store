{{-- 管理員主頁面 --}}

<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/jquery-migrate.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <style>
        .b {
            width: 300px;
        }
    </style>


</head>

<body>
    <nav class="navbar bg-info navbar-dark">
        <div class="container-fluid">
            <ul class="nav navbar-nav" style="font-weight:bold;font-size: 20px; width:100%">
                <li class="active"><a href="#"
                        style="font-size: 30px;margin-right: 36px;">歡迎進入管理頁面</a></li>
                <li><a href="#">消息</a></li>
                <li><a href="#">商品</a></li>
                <ul class="nav navbar-nav navbar-right" style="margin-right: 12px">
                    {{-- @if (Route::has('login')) --}}
                        <li>
                            {{-- @auth --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{-- {{ Auth::user()->name }}<span class="caret"></span> --}}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                    </li>
                                    {{-- @can('admin') --}}
                                        <li><a class="dropdown-item" href="#">
                                                返回主頁
                                            </a>
                                        </li>
                                    {{-- @endcan --}}

                                </ul>
                            </li>
                        {{-- @else
                            <a href="{{ route('login') }}" style="font-size:15px; text-align: right;"><span
                                    class="glyphicon glyphicon-user">&nbsp;</span>Login</a>
                            </li>
                            <li>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" style="font-size:15px; text-align: right;"><span
                                            class="glyphicon glyphicon-log-in">&nbsp;</span>Register</a>
                                @endif
                            @endauth --}}
                        </li>
                    {{-- @endif --}}
                </ul>
        </div>
    </nav>
    <div class="container">
        <div class="text-center">
            <div class="container">


                <form action="#" method="POST" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <label for="content_1">消息主題：
                        <textarea name="content_1" class="form-control b"></textarea>
                    </label><br>

                    <label for="content_2">消息內容：
                        <textarea name="content_2" class="form-control b"></textarea>
                    </label><br>

                    <label for="image">圖片
                        <input class="form-control b" type="file" name="image">
                    </label><br>

                    <button type="submit" class="btn btn-primary">新增消息</button>

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
