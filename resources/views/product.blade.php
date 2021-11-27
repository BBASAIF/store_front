@extends('master')
@section("content")
<div class="container custom-product">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        @foreach ($products as $item)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$item['id']-2}}" class="item {{$item['id']==2?'active':''}}" aria-current="true" aria-label="Slide {{$item['id']-1}}"></button>
            <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="carousel-item item {{$item['id']==2?'active':''}}">
                    <a href="detail/{{$item['id']}}">
                        <img src="{{$item['gallery']}}" class="d-block w-100 slider-img" alt="{{$item['name']}}">
                        <div class="carousel-caption d-none d-md-block slider-text">
                            <h5>{{$item['name']}}</h5>
                            <p>{{$item['description']}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach ($products as $item)
            <div class="trending-item">
            <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="trending-image" alt="{{$item['name']}}">
                    <div class="">
                        <h5>{{$item['name']}}</h5>
                    </div>
            </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
