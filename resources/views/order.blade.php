@extends('master')
@section("content")
<div class="container custom-product">
    <div class=col-sm-10>
        <table class="table">
            <tbody>
                <tr>
                <th scope="row">Amount</th>
                <td>{{$total}}$</td>
                </tr>
                <tr>
                <th scope="row">Tax</th>
                <td>0$</td>
                </tr>
                <tr>
                <th scope="row">Delivery Charge</th>
                <td>20$</td>
                </tr>
                <tr>
                <th scope="row">Total</th>
                <td>{{$total+20}}$</td>
                </tr>
            </tbody>
        </table>
        <form action="/place_order" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" class="form-control" placeholder="Enter Your Address"></textarea>
            </div>
            <div class="form-group">
                <label>Payment Method</label><br>
                <input type="radio" value="cash" name="payment" checked><span style="margin-left: 10px;">Visa</span><br>
                <input type="radio" value="cash" name="payment"><span style="margin-left: 10px;">MAster Card</span><br>
                <input type="radio" value="cash" name="payment"><span style="margin-left: 10px;">PayPal</span><br>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
        </form>
    </div>
</div>
@endsection
