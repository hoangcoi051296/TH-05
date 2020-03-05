@extends('layout')

@section('title',"About")
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
                    <li><a href="/">Home</a></li>
                    <li ><a href="/about">About</a></li>
                    <li class="active"><a href="/delivery">Delivery</a></li>
                    <li  ><a href="/news">News</a></li>
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
    </div>
@endsection
@section('content')

    <div class="content">
        <div class="section group">
            <div class="grid_1_of_3 images_1_of_3">
                <img src="images/delivery-img1.jpg" alt="" />
                <h3>Lorem Ipsum is simply dummy text </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="grid_1_of_3 images_1_of_3">
                <img src="images/delivery-img2.jpg" alt="" />
                <h3>Lorem Ipsum is simply dummy text </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="grid_1_of_3 images_1_of_3">
                <img src="images/delivery-img3.jpg" alt="" />
                <h3>Lorem Ipsum is simply dummy text </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
        <div class="faqs">
            <h2>Frequently Asked Questions</h2>
            <div id="posts">
                <div class="tab bar">
                    <h4 class="post-title">1.What is Lorem Ipsum?</h4>
                </div>
                <div class="panel margin-lr-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="tab bar">
                    <h4 class="post-title"> 2.What is Lorem Ipsum Lorem Ipsum has been the industry's standard dummy text?</h4>
                </div>
                <div class="panel margin-lr-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="tab bar">
                    <h4 class="post-title"> 3.What is Lorem Ipsum Lorem Ipsum has been the industry's?</h4>
                </div>
                <div class="panel margin-lr-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="tab bar">
                    <h4 class="post-title"> 4.What is Lorem Ipsum dummy text of the printing?</h4>
                </div>
                <div class="panel margin-lr-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="tab bar">
                    <h4 class="post-title"> 5.What is Lorem Ipsum printing and typesetting industry?</h4>
                </div>
                <div class="panel margin-lr-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="tab bar">
                    <h4 class="post-title"> 6.What is Lorem Ipsum text of the printing?</h4>
                </div>
                <div class="panel margin-lr-7">
                    <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <div class="tab bar">
                    <h4 class="post-title"> 7.What is Lorem Ipsum?</h4>
                </div>
                <div class="panel margin-lr-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="tab bar">
                    <h4 class="post-title"> 8.What is Lorem Ipsum dummy text ever since the 1500s?</h4>
                </div>
                <div class="panel margin-lr-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="tab bar">
                    <h4 class="post-title"> 9.What is Lorem Ipsum  Lorem Ipsum has been the industry's standard dummy text?</h4>
                </div>
                <div class="panel margin-lr-7">
                    <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <div class="tab bar">
                    <h4 class="post-title"> 10.What is Lorem Ipsum typesetting industry?</h4>
                </div>
                <div class="panel margin-lr-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>


@endsection
