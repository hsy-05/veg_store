{{-- 主頁面的圖片幻燈片 --}}

@extends('pageHome')

@section('content')
    <div id="demo" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
        <!-- Indicators/dots -->
        <ol class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ol>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/TEST.jpg') }}" alt="#" class="d-block" style="height:500px; width:100%;">
                {{-- <div class="carousel-caption">
                    <h3>標題</h3>
                    <p>內容</p>
                </div> --}}
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/tomato.jpg') }}" alt="#" class="d-block"
                    style="height:500px; width:100%;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/brocoli.jpg') }}" alt="#" class="d-block"
                    style="height:500px; width:100%;">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
