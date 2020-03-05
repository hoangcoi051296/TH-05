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
                    <li class="active"><a href="/about">About</a></li>
                    <li><a href="/delivery">Delivery</a></li>
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
            <div class="col_1_of_3 span_1_of_3">
                <h3>Who We Are</h3>
                <img src="images/about_img.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="col_1_of_3 span_1_of_3">
                <h3>Our History</h3>
                <div class="history-desc">
                    <div class="year"><p>1998 -</p></div>
                    <p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="clear"></div>
                </div>
                <div class="history-desc">
                    <div class="year"><p>2001 -</p></div>
                    <p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    <div class="clear"></div>
                </div>
                <div class="history-desc">
                    <div class="year"><p>2006 -</p></div>
                    <p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="clear"></div>
                </div>
                <div class="history-desc">
                    <div class="year"><p>2010 -</p></div>
                    <p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="clear"></div>
                </div>
                <div class="history-desc">
                    <div class="year"><p>2013 -</p></div>
                    <p class="history">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col_1_of_3 span_1_of_3">
                <h3>Opportunities</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <div class="list">
                    <ul>
                        <li><a href="#">Text of the printing</a></li>
                        <li><a href="#">Lorem Ipsum has been the standard</a></li>
                        <li><a href="#">Dummy text ever since the 1500s</a></li>
                        <li><a href="#">Unknown printer took a galley</a></li>
                        <li><a href="#">Led it to make a type specimen</a></li>
                        <li><a href="#">Not only five centuries</a></li>
                        <li><a href="#">Electronic typesetting</a></li>
                        <li><a href="#">Unchanged. It was popularised</a></li>
                        <li><a href="#">Sheets containing Lorem Ipsume</a></li>
                    </ul>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </div>

@endsection
