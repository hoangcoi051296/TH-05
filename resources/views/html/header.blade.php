<header class="header">
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo"><a href="{{url("/")}}">Th05.</a></div>
                        <nav class="main_nav">
                            <ul>
                                <li >
                                    <a href="{{url("/")}}">Home</a>
{{--                                    <ul>--}}
{{--                                        <li><a href="{{url("/san-pham")}}">Product</a></li>--}}
{{--                                        <li><a href="{{url("/chi-tiet-san-pham")}}">Product View</a></li>--}}
{{--                                        <li><a href="{{url("/gio-hang")}}">Cart</a></li>--}}
{{--                                        <li><a href="{{url("/check-out")}}">Check out</a></li>--}}
{{--                                        <li><a href="{{url("/contact")}}">Contact</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="hassubs">
                                    <a href="#">Product</a>
                                    <ul>
                                        @foreach(\App\Category::all() as $c)
                                        <li><a href="{{url("/danh-muc/{$c->id}")}}">{{$c->category_name}}</a></li>
                                            @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="{{url("/contact")}}">Contact</a></li>
                                <li  class="hassubs active"><a href="#">Account</a>
                                    <ul>
                                        <li><a href="{{url("/login")}}">Sign in</a></li>
                                        <li><a href="{{url("/logout")}}">Sign out</a></li>
                                        <li><a href="{{url("/register")}}">Register</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <form class="form-inline "  style="width: 200px;height: 30px" method="get" action="{{asset('search')}}">
                                        <input class="form-control form-control-sm ml-3 w-75 " name="key"  type="text"  placeholder="Search"
                                               aria-label="Search" >
                                       <button style="height: 30px;width: 30px" type="submit"> <span class="fa fa-search form-control-feedback"></span></button>
                                    </form>
                                </li>
                            </ul>
                        </nav>

                        <div class="header_extra ml-auto">
                            <div class="shopping_cart">
                                @php $cart= session("cart") @endphp
                                @if(isset($cart))
                                <a href="{{url("cart")}}">
                                    <div>Cart (<span>{{count($cart)}}</span> )</div>
                                </a>
                                @else

                                    <a href="{{url("cart")}}" class="card-bag"><img src="{{asset("img/icons/bag.png")}}" alt="">  <div>Cart (<span>0</span> ) </div></a>
                                @endif
                            </div>
                            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Panel -->
    <div class="search_panel trans_300">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#">
                            <input type="text" class="search_input" placeholder="Search" required="required">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Social -->
    <div class="header_social">
        <ul>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</header>

<!-- Menu -->

<div class="menu menu_mm trans_300">
    <div class="menu_container menu_mm">
        <div class="page_menu_content">

            <div class="page_menu_search menu_mm">
                <form action="#">
                    <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                </form>
            </div>
            <ul class="page_menu_nav menu_mm">
                <li class="page_menu_item has-children menu_mm">
                    <a href="index.html">Home<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection menu_mm">
                        <li class="page_menu_item menu_mm"><a href="categories.html">Categories<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="product.html">Product<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="cart.html">Cart<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
                    </ul>
                </li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection menu_mm">
                        @foreach(\App\Category::all() as $c)
                            <li class="page_menu_item menu_mm"><a href="{{url("/danh-muc/{$c->id}")}}">{{$c->category_name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="page_menu_item menu_mm"><a href="index.html">Accessories<i class="fa fa-angle-down"></i></a></li>
                <li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
                <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="menu_social">
        <ul>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>
