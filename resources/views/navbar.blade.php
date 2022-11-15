<nav class="navbar fixed-top navbar-expand-lg navbar-light justify-content-between"
    style="background-image: linear-gradient(to bottom, #c1dfc4 0%, #f8fafc 100%);">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-weight:bold;font-size: 20px; width:100%">
            <a href="{{ route('pageHome') }}" class="navbar-brand"
                style="font-size: 30px;margin-right: 36px;">Veg.Store</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <li class="nav-item"><a href="{{ route('news') }}" class="nav-link">{{ __('News') }}</a></li>
                <li class="nav-item"><a href="{{ route('veg') }}" class="nav-link">{{ __('Vegetable') }}</a></li>
                <li class="nav-item"><a href="#" class="nav-link">{{ __('Fruit') }}</a></li>
                @can('admin')
                    <li><a href="{{ route('adminHome') }}" class="adminBG nav-link">進入管理頁面</a></li>
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

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
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
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link" style="text-align: right;"><span
                                    class="glyphicon glyphicon-user">&nbsp;</span>登入</a>
                        </li>
                            </li>
                            <li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                      <a href="{{ route('register') }}" class="nav-link" style=" text-align: right;"><span
                                            class="glyphicon glyphicon-log-in">&nbsp;</span>註冊</a>
                                </li>
                                @endif
                            @endauth
                        </li>
                    @endif
                </ul>
            </div>
    </div>
</nav>
