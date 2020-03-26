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
            <div class="row">
                <div class="col">
                    <!-- Column Titles -->
                    <div class="cart_info_columns clearfix">
                        <div class="cart_info_col cart_info_col_product">Product</div>
                        <div class="cart_info_col cart_info_col_price">Price</div>
                        <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                        <div class="cart_info_col cart_info_col_total">Total</div>
                    </div>
                </div>
            </div>
            <div class="row cart_items_row">
                <div class="col">
                    @php $total = 0; @endphp
                    <!-- Cart Item -->
                    @forelse($product as $p)
                        <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                            <!-- Name -->
                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_item_image">
                                    <div><img src="{{asset($p->thumnail)}}" alt=""></div>
                                </div>
                                <div class="cart_item_name_container">
                                    <div class="cart_item_name"><a href="{{url("san-pham/{$p->id}")}}">{{$p->product_name}}</a></div>
                                    <div class="cart_item_edit"><a href="#">Edit Product</a></div>
                                </div>
                            </div>
                            <!-- Price -->
                            <div class="cart_item_price">${{$p->getprice()}}</div>
                            <!-- Quantity -->
                            <div class="cart_item_quantity">
                                <div class="product_quantity_container">
                                    <div class="product_quantity clearfix">
                                        <span>Qty</span>
                                        <input id="quantity_input" type="text" pattern="[0-9]*" value="{{$p->pivot->qty}}">
                                    </div>
                                </div>
                            </div>
                            <!-- Total -->
                            <div class="cart_item_total">${{$p->pivot->qty*$p->price}}</div>
                            @php $total+=($p->pivot->qty*$p->price) @endphp

                        </div>
                    @empty
                        <h3>Không có sản phẩm nào trong giỏ hàng</h3>
                    @endforelse
                </div>
            </div>
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
                    <div class="delivery">
                        <div class="section_title">Shipping method</div>
                        <div class="section_subtitle">Select the one you want</div>
                        <div class="delivery_options">
                            <label class="delivery_option clearfix">Next day delivery
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                                <span class="delivery_price">$4.99</span>
                            </label>
                            <label class="delivery_option clearfix">Standard delivery
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                                <span class="delivery_price">$1.99</span>
                            </label>
                            <label class="delivery_option clearfix">Personal pickup
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                                <span class="delivery_price">Free</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-2">
                    <div class="cart_total">
                        <div class="section_title">Cart total</div>
                        <div class="section_subtitle">Final info</div>
                        <div class="cart_total_container">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Subtotal</div>
                                    <div class="cart_total_value ml-auto">${{number_format($total,2,',','.')}}</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Shipping</div>
                                    <div class="cart_total_value ml-auto">Free</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Total</div>
                                    <div class="cart_total_value ml-auto">${{number_format($total,2,',','.')}}</div>
                                </li>
                            </ul>
                        </div>
                        <div class="button checkout_button"><a href="{{url("repurchase/{$p->pivot->orders_id}")}}">Place Order</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
