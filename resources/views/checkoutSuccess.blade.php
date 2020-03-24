@extends('layout')
@section('title',"Đặt hàng thành công")
<div class="home" style="height: 300px" >
    <div class="home_container">
        <div class="home_background" style="background-image:url({{asset("images/cart.jpg")}})"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li>Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="checkout-success" style="text-align: center">
    <img src="{{asset("images/success.jpg")}} " alt="" style="width: 70px;height: 70px">
    <h3>Thank you for your purchase!</h3>
    <p>We'll email you an order confirmation with details and tracking info.</p>
    <a href="{{url("/")}}" class="btn btn-primary"> Continue Shopping</a>
</div>
