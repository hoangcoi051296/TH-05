@extends('layout')

@section('title',"Check out")
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
@section('content')
    <!-- Checkout -->
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(images/cart.jpg)"></div>
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
    <form action="{{url("check-out")}}" id="checkout_form" class="checkout_form" method="post">
    <div class="checkout">
        <div class="container">
            <div class="row">

                <!-- Billing Info -->
                <div class="col-lg-6">
                    <div class="billing checkout_section">
                        <div class="section_title">Billing Address</div>
                        <div class="section_subtitle">Enter your address info</div>
                        <div class="checkout_form_container">

                                @csrf
                                <div >
                                    <label for="checkout_phone">Name</label>
                                    <input type="text" id="checkout_phone" name="customer_name" class="checkout_input" required>
                                </div>
                                <div>
                                    <!-- Phone no -->
                                    <label for="checkout_phone">Phone no*</label>
                                    <input type="text" id="checkout_phone" name="telephone" class="checkout_input" required>
                                </div>
                                <div>
                                    <!-- Email -->
                                    <label for="checkout_email">Address*</label>
                                    <input type="text" id="checkout_email" name="address" class="checkout_input" required>
                                </div>

                        </div>
                    </div>
                </div>

                <!-- Order Info -->

                <div class="col-lg-6">
                    <div class="order checkout_section">
                        <div class="section_title">Your order</div>
                        <div class="section_subtitle">Order details</div>

                        <!-- Order details -->
                        <div class="order_list_container">
                            <div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Product</div>
                                <div class="order_list_value ml-auto">Total</div>
                            </div>
                            <ul class="order_list">
                                @php $total = 0; @endphp
                                @foreach(session('cart') as $p)
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">{{$p->product_name}} X {{$p->cart_qty}}</div>
                                    <div class="order_list_value ml-auto">${{$p->getPrice()}}</div>
                                </li>
                                    @php $total+=($p->cart_qty*$p->price) @endphp
                                @endforeach
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Subtotal</div>
                                    <div class="order_list_value ml-auto">${{number_format($total,2)}}</div>
                                </li>
                            </ul>
                        </div>

                        <!-- Payment Options -->
                        <div class="payment">
                            <div class="payment_options">
                                <label class="payment_option clearfix">Paypal
                                    <input type="radio"  value="paypal" name="payment_method">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="payment_option clearfix">Cach on delivery
                                    <input type="radio"  value="cod" name="payment_method">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="payment_option clearfix">Credit card
                                    <input type="radio"  value="credit_card" name="payment_method">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="payment_option clearfix">Direct bank transfer
                                    <input type="radio" value="bank_transfer" checked="checked" name="payment_method">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <!-- Order Text -->
                        <div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</div>
                        <button class="site-btn btn-full" type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
