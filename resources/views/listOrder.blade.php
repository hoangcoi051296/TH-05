@extends('layout')

@section('title',"Giỏ hàng")
<link rel="stylesheet" type="text/css" href="{{asset("styles/cart.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("styles/cart_responsive.css")}}">
@section('content')
    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url({{asset("images/cart.jpg")}})"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="{{asset("/")}}">Home</a></li>
                                        <li>Shopping Cart</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Info -->

    <div class="cart_info">
        <div class="container">
            <table class="table ">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Customer_name</th>
                    <th>Telephone</th>
                    <th>Payment_method</th>
                    <th>Grand_total</th>
                </tr>
                </thead>
                <tbody>
                @forelse($listOrder as $p)
                <tr>
                    <td><a href="{{url("/viewOrder/{$p->id}")}}">{{$p->id}}</a></td>
                    <td>{{$p->customer_name}}</td>
                    <td>{{$p->telephone}}</td>
                    <td>{{$p->payment_method}}</td>
                    <td>{{$p->grand_total}}</td>
                </tr>
                @empty
                <h3>Không có đơn hàng</h3>
                @endforelse
                </tbody>
            </table>

            <div class="row row_cart_buttons">
                <div class="col">
                    <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="button continue_shopping_button"><a href="{{asset("/")}}">Continue shopping</a></div>
                        <div class="cart_buttons_right ml-lg-auto">
                            <div class="button clear_cart_button"><a href="{{asset("/clear-cart")}}">Clear cart</a></div>
                            <div class="button update_cart_button"><a href="{{url("listOrder")}}">Orders purchased</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row_extra">
                <div class="col-lg-4">

                    <!-- Delivery -->

                </div>

                <div class="col-lg-6 offset-lg-2">
                    <div class="cart_total">
                        <div class="section_title">Cart total</div>
                        <div class="section_subtitle">Final info</div>
                        <div class="cart_total_container">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Subtotal</div>
                                    <div class="cart_total_value ml-auto"></div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Shipping</div>
                                    <div class="cart_total_value ml-auto">Free</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Total</div>
                                    <div class="cart_total_value ml-auto"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="button checkout_button"><a href="{{url("check-out")}}">Proceed to checkout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
