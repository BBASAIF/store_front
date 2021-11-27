@extends('master')
@section("content")
<div class="container">
    <div class="row detail-container">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}$</h3>
            <h4>Category: {{$product['category']}}</h4>
            <h4>Description: {{$product['description']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button style="margin-bottom: 10px;" class="btn btn-primary">Add to Cart</button>
            </form>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
@endsection
