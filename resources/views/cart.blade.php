@extends('master')
@section("content")
<div class="container custom-product">
    <div class=col-sm-10>
        <div class="trending-wrapper">
            <h3>Cart:</h3>
            <a class="btn btn-success" href="order">Order Now</a>
            @foreach ($products as $item)
                <div class="row Searched-item cart-list-devider">
                    <div class="col-4 sub-container">
                        <div class="center">
                            <a href="detail/{{$item->id}}">
                                <img src="{{$item->gallery}}" class="trending-image" alt="{{$item->name}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-5 sub-container">
                        <div class="center">
                            <a href="detail/{{$item->id}}">
                                <div class="">
                                    <h2>{{$item->name}}</h2>
                                    <h5>{{$item->description}}</h5>
                                    <h5>{{$item->price}}$</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 sub-container">
                        <div class="center">
                            <a href="/remove_from_cart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <a class="btn btn-success" href="order">Order Now</a>
        </div>
    </div>
</div>
@endsection
