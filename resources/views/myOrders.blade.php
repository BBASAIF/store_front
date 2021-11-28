@extends('master')
@section("content")
<div class="container custom-product">
    <div class=col-sm-10>
        <div class="trending-wrapper">
            <h3>My Orders:</h3>
            @foreach ($orders as $item)
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
                        <div class="">
                            <h5>Name: {{$item->name}}</h2><br>
                            <h6>Delivery Status: {{$item->status}}</h5><br>
                            <h6>Address: {{$item->address}}</h5><br>
                            <h6>Payment Status: {{$item->address}}</h5><br>
                            <h6>Payment Method: {{$item->payment_method}}</h5><br>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
