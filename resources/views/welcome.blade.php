<!--主頁面-->
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <title>Co.Store</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">  {{-- 網站圖標 --}}
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/jquery-migrate.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  {{-- <meta name="description" content="">
  <meta name="author" content=""> --}}

     <!-- Styles -->
     <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div >
                <nav class="navbar navbar-fixed-top " style="background-color: white;">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav"  style="font-weight:bold;font-size: 20px; width:100%">
                        <li class="active"><a href="#" style="font-size: 30px;margin-right: 36px;">Veg.Store</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">蔬菜</a></li>
                        <li><a href="#">水果</a></li>
                        <ul class="nav navbar-nav navbar-right" style="margin-right: 12px">
                          @if (Route::has('login'))
                              <li>
                                  @auth
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }}<span class="caret"></span>
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
                                          @can('admin')
                                          <li><a class="dropdown-item" href="#">
                                              進入管理頁面
                                              </a>
                                          </li>
                                          @endcan
                                          <li><a class="dropdown-item" href="#">
                                            會員資料
                                            </a>
                                        </li>

                                      </ul>
                                  </li>
                                  @else
                                      <a href="{{ route('login') }}" style="font-size:15px; text-align: right;"><span class="glyphicon glyphicon-user">&nbsp;</span>Login</a>
                              </li>
                                  <li>
                                      @if (Route::has('register'))
                                          <a href="{{ route('register') }}" style="font-size:15px; text-align: right;"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Register</a>
                                      @endif
                                  @endauth
                                  </li>
                          @endif
                      </ul>

                    </div>
                  </nav>
                </div>



        <div class="w3-container w3-center w3-animate-opacity">
        <a href="index.php">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" class="w3-container w3-center w3-animate-opacity" >
                <div class="item active">
                <img src="{{asset('images/title.jpg')}}" alt="#" class="img-responsive" style="height:500px; width:100%;">
                </div>

                <div class="item">
                <img src="{{asset('/images/title2.jpg')}}" alt="#" class="img-responsive" style="height:500px; width:100%;">
                </div>

                <div class="item">
                <img src="{{asset('/images/title3.jpg')}}" alt="#" class="img-responsive" style="height:500px; width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </a>
        </div>
        {{-- @include('news') --}}
            </div>
            @include('footer')

        </div>

    </body>

</html>