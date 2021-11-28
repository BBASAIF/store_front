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
        <form>
            <div class="form-group">
                <textarea type="email" class="form-control" placeholder="Enter Your Address"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Payment Method</label><br>
                <input type="radio" name="payment"><span>Visa</span><br>
                <input type="radio" name="payment"><span>MAster Card</span><br>
                <input type="radio" name="payment"><span>PayPal</span><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
