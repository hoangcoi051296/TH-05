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
                <a href="/blog/public/"><img src="images/logo.png" alt="" /></a>
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
                    <li><a href="/blog/public/">Home</a></li>
                    <li><a href="/blog/public/about">About</a></li>
                    <li><a href="/blog/public/delivery">Delivery</a></li>
                    <li  class="active"><a href="/blog/public/news">News</a></li>
                    <li><a href="/blog/public/contact">Contact</a></li>
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
        <div class="image group">
            <div class="grid images_3_of_1">
                <img src="images/newsimg1.jpg" alt="" />
            </div>
            <div class="grid news_desc">
                <h3>Lorem Ipsum is simply dummy text </h3>
                <h4>Posted on Aug 13th, 2013 by <span><a href="#">Finibus Bonorum</a></span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <a href="#" title="more">[....]</a></p>
            </div>
        </div>
        <div class="image group">
            <div class="grid images_3_of_1">
                <img src="images/newsimg2.jpg" alt="" />
            </div>
            <div class="grid news_desc">
                <h3>Lorem Ipsum is simply dummy text </h3>
                <h4>Posted on Aug 8th, 2013 by <span><a href="#">Finibus Bonorum</a></span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <a href="#" title="more">[....]</a></p>
            </div>
        </div>
        <div class="image group">
            <div class="grid images_3_of_1">
                <img src="images/newsimg3.jpg" alt="" />
            </div>
            <div class="grid news_desc">
                <h3>Lorem Ipsum is simply dummy text </h3>
                <h4>Posted on Aug 1st, 2013 by <span><a href="#">Finibus Bonorum</a></span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur <a href="#" title="more">[....]</a></p>
            </div>
        </div>
        <div class="content-pagenation">
            <li><a href="#">Frist</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><span>....</span></li>
            <li><a href="#">Last</a></li>
            <div class="clear"> </div>
        </div>
    </div>

    @endsection
