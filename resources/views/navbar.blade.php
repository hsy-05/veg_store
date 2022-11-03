<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light justify-content-between">
    <div class="container-fluid">
        <ul class="nav navbar-nav" style="font-weight:bold;font-size: 20px; width:100%">
            <li class="active"><a href="{{ route('pageHome') }}" style="font-size: 30px;margin-right: 36px;">Veg.Store</a></li>
            <li><a href="{{ route('news') }}">{{ __('News' )}}</a></li>
            <li><a href="{{ route('veg') }}">{{ __('Vegetable') }}</a></li>
            <li><a href="#">{{ __('Fruit') }}</a></li>
            @can('admin')
                <li><a href="{{ route('adminHome') }}" class="adminBG">進入管理頁面</a></li>
            @endcan

            <ul class="nav navbar-nav ml-auto">
                @if (Route::has('login'))
                    <li>
                        @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </li>

                                <li><a class="dropdown-item" href="#">
                                        會員資料
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @else
                        <a href="{{ route('login') }}" style="font-size:15px; text-align: right;"><span
                                class="glyphicon glyphicon-user">&nbsp;</span>登入</a>
                        </li>
                        <li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" style="font-size:15px; text-align: right;"><span
                                        class="glyphicon glyphicon-log-in">&nbsp;</span>註冊</a>
                            @endif
                        @endauth
                    </li>
                @endif
            </ul>

    </div>
</nav>
