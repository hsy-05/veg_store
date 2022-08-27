{{-- 主頁面的圖片幻燈片 --}}

@extends('pageHome')

@section('content')
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
            <div class="carousel-inner" class="w3-container w3-center w3-animate-opacity">
                <div class="item active">
                    <img src="{{ asset('images/title.jpg') }}" alt="#" class="img-responsive"
                        style="height:500px; width:100%;">
                </div>

                <div class="item">
                    <img src="{{ asset('/images/title2.jpg') }}" alt="#" class="img-responsive"
                        style="height:500px; width:100%;">
                </div>

                <div class="item">
                    <img src="{{ asset('/images/title3.jpg') }}" alt="#" class="img-responsive"
                        style="height:500px; width:100%;">
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
@endsection
