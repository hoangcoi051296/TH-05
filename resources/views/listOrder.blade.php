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
                    <th>Order #</th>
                    <th>Customer_name</th>
                    <th>Telephone</th>
                    <th>Payment_method</th>
                    <th>Grand_total</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @forelse($listOrder as $p)
                <tr>
                    <td><a href="{{url("/viewOrder/{$p->id}")}}"># {{$p->id}}</a></td>
                    <td>{{$p->customer_name}}</td>
                    <td>{{$p->telephone}}</td>
                    <td>{{$p->payment_method}}</td>
                    <td>{{$p->grand_total}}</td>
                    <td><a href="{{url("orderPurchasedDestroy/{$p->id}")}}">Delete</a></td>
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
                    </div>
                </div>
            </div>
            <div class="row row_extra">
                <div class="col-lg-4">

                    <!-- Delivery -->

                </div>

            </div>
        </div>
    </div>

@endsection
