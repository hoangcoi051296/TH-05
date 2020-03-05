@extends('layout')

@section('title',"Trang chủ")
@section('header')
    <div class="header">
        <div class="headertop_desc">
            <div class="call">
                <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></p>
            </div>
            <div class="account_desc">
                <ul>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">My Account</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header_top">
            <div class="logo">
                <a href="/"><img src="images/logo.png" alt="" /></a>
            </div>
            <div class="cart">
                <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
                    <ul class="dropdown">
                        <li>you have no items in your Shopping cart</li>
                    </ul></div>
            </div>
            <script type="text/javascript">
                function DropDown(el) {
                    this.dd = el;
                    this.initEvents();
                }
                DropDown.prototype = {
                    initEvents : function() {
                        var obj = this;

                        obj.dd.on('click', function(event){
                            $(this).toggleClass('active');
                            event.stopPropagation();
                        });
                    }
                }

                $(function() {

                    var dd = new DropDown( $('#dd') );

                    $(document).click(function() {
                        // all dropdowns
                        $('.wrapper-dropdown-2').removeClass('active');
                    });

                });

            </script>
            <div class="clear"></div>
        </div>
        <div class="header_bottom">
            <div class="menu">
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/delivery">Delivery</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="search_box">
                <form>
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header_slide">
            <div class="header_bottom_left">
                <div class="categories">
                    <ul>
                        <h3>Categories</h3>
                        <li><a href="#">Mobile Phones</a></li>
                        <li><a href="#">Desktop</a></li>
                        <li><a href="#">Laptop</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Software</a></li>
                        <li><a href="#">Sports &amp; Fitness</a></li>
                        <li><a href="#">Footwear</a></li>
                        <li><a href="#">Jewellery</a></li>
                        <li><a href="#">Clothing</a></li>
                        <li><a href="#">Home Decor &amp; Kitchen</a></li>
                        <li><a href="#">Beauty &amp; Healthcare</a></li>
                        <li><a href="#">Toys, Kids &amp; Babies</a></li>
                    </ul>
                </div>
            </div>
            <div class="header_bottom_right">
                <div class="slider">
                    <div id="slider">
                        <div id="mover">
                            <div id="slide-1" class="slide">
                                <div class="slider-img">
                                    <a href="/chi-tiet-san-pham"><img src="images/slide-1-image.png" alt="learn more" /></a>
                                </div>
                                <div class="slider-text">
                                    <h1>Clearance<br><span>SALE</span></h1>
                                    <h2>UPTo 20% OFF</h2>
                                    <div class="features_list">
                                        <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>
                                    </div>
                                    <a href="/chi-tiet-san-pham" class="button">Shop Now</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="slide">
                                <div class="slider-text">
                                    <h1>Clearance<br><span>SALE</span></h1>
                                    <h2>UPTo 40% OFF</h2>
                                    <div class="features_list">
                                        <h4>Get to Know More About Our Memorable Services</h4>
                                    </div>
                                    <a href="/chi-tiet-san-pham" class="button">Shop Now</a>
                                </div>
                                <div class="slider-img">
                                    <a href="/chi-tiet-san-pham"><img src="images/slide-3-image.jpg" alt="learn more" /></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="slide">
                                <div class="slider-img">
                                    <a href="/chi-tiet-san-pham"><img src="images/slide-2-image.jpg" alt="learn more" /></a>
                                </div>
                                <div class="slider-text">
                                    <h1>Clearance<br><span>SALE</span></h1>
                                    <h2>UPTo 10% OFF</h2>
                                    <div class="features_list">
                                        <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>
                                    </div>
                                    <a href="/chi-tiet-san-pham" class="button">Shop Now</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

@endsection
@section('content')
    <div class="main">
        <div class="content">
            <div class="content_top">
                <div class="heading">
                    <h3>New Products</h3>
                </div>
                <div class="see">
                    <p><a href="#">See all Products</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="/chi-tiet-san-pham"><img src="images/feature-pic1.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">$620.87</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="/chi-tiet-san-pham">Add to Cart</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="/chi-tiet-san-pham"><img src="images/feature-pic2.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">$899.75</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="/chi-tiet-san-pham">Add to Cart</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="/chi-tiet-san-pham"><img src="images/feature-pic3.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">$599.00</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="/chi-tiet-san-pham">Add to Cart</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="/chi-tiet-san-pham"><img src="images/feature-pic4.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">$679.87</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="/chi-tiet-san-pham">Add to Cart</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="heading">
                    <h3>Feature Products</h3>
                </div>
                <div class="see">
                    <p><a href="#">See all Products</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="/chi-tiet-san-pham"><img src="images/new-pic1.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">$849.99</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="/chi-tiet-san-pham">Add to Cart</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="/chi-tiet-san-pham"><img src="images/new-pic2.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">$599.99</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="/chi-tiet-san-pham">Add to Cart</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="/chi-tiet-san-pham"><img src="images/new-pic4.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">$799.99</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="/chi-tiet-san-pham">Add to Cart</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="/chi-tiet-san-pham"><img src="images/new-pic3.jpg" alt="" /></a>
                    <h2>Lorem Ipsum is simply </h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">$899.99</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="/chi-tiet-san-pham">Add to Cart</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
