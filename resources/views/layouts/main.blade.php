<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/dilan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Dec 2018 17:05:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dilan - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public')}}/assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/chosen.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/responsive.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/style1.css">
    <script src="{{url('public')}}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!-- header start -->
    <header class="header-area transparent-bar padding-width-1 clearfix">
        <div class="container-fluid">
            <div class="header-top ptb-15">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-12">
                        {{-- @foreach($cats as $cat) --}}
                        <div class="logo logo-pading">
                            <a href="{{route('homenm')}}"><img src="{{url('public')}}/assets/img/logo/logo.png"></a>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="header-right-site">
                            @if(Auth::guest())
                            <div class="header-login">
                                <a href="{{route('user_login')}}">
                                    <span class="ion-heart-broken"></span>
                                </a>

                            </div>

                            @else()
                            @if(Auth::check())
                            <div class="header-login same-style">
                                <a href="#">
                                    <span class="ion-heart"></span>
                                </a>
                            </div>
                            <div class="default-message same-style">
                                <a href="#">

                                 <span><p>Hi, {{Auth::user()->name}} </p></span>
                             </a>

                         </div>
                         @else
                         <div class="header-login same-style">
                            <a href="#">
                                <span class="ion-heart"></span>
                            </a>
                        </div>
                        <div class="default-message same-style">
                            <a href="#">

                             <span><p>Hi, {{Auth::user()->name}} </p></span>
                         </a>

                     </div>
                     @endif

                     <div class="language-currency same-style">
                        <div class="language">
                            <select class="select-header orderby">
                                <option value="">Eng</option>

                            </select>
                        </div>
                        <div class="currency">
                            <select class="select-header orderby">
                                <option value="">USD</option>
                            </select>
                        </div>
                    </div>
                    <div class="header-login">
                        <a href="{{route('user_logout')}}">
                            <span class="ion-log-out" ></span>
                        </a>
                    </div>

                    @endif
                    <div class="header-cart same-style">
                        <button class="icon-cart">
                            <i class="ion-bag"></i>
                            <span class="count-style">{{$carts->totalQty}}</span>
                        </button>
                        <div class="shopping-cart-content">
                            <form action="update_cart">
                                <div id="overflow" >
                                    @foreach($carts->items as $item)
                                    <input type="hidden" name="id[]" value="{{$item['id']}}">

                                    <ul>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img col-md-3">
                                                <a href="#"><img width="50px" src="{{url('public')}}/assets/img/product/{{$item['image']}}"></a>

                                            </div>
                                            <div class="shopping-cart-title col-md-8">
                                                <h3><a href="#">{{$item['name']}} <br>Shave </a></h3>
                                                <span>$ {{number_format($item['price'])}}</span>

                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="{{route('remode_cart', ['id' => $item['id']])}}">x</a>
                                            </div>
                                            <div class="col-md-12">
                                                <h4>Số lượng:{{$item['quantity']}}</h4>
                                                <div class="cart-plus-minus-2">
                                                    <input id="inp" class="inp" type="text" value="{{$item['quantity']}}" name="quantity[]" class="cart-plus-minus-box">
                                                    <div class="inc qtybutton">-</div>
                                                    <div class="dec qtybutton">+</div>
                                                </div>
                                            </div>
                                        </li>

                                        
                                        
                                       {{--  <div class="com-md-2"  >

                                            <input type="number" name="quantity[]" value="{{$item['quantity']}}">
                                        </div> --}}
                                    </ul>

                                    @endforeach
                                </div>
                                <div class="shopping-cart-total">
                                    <h4>Subtotal: <span>$ {{number_format($carts->totalAmount)}}</span></h4>
                                    <button type="submit" style="width:100px; height: 100%x; color: red; background: black;">Update</button>
                                </div>
                                <div class="shopping-cart-btn flex">
                                    <a class="btn-style btn-hover" href="{{route('check_cart')}}">Giỏ Hàng</a>
                                    <a class="btn-style btn-hover" href="{{route('buy_cart')}}">Mua Hàng</a>
                                    
                                </div>

                                {{-- @endif() --}}
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom black-bg">
    <div class="container-fluid">
        <div class="menu-position">
           <div class="row">
            <div class="col-lg-8 d-none d-lg-block">
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li><a href="">home</a>
                                <ul class="submenu">
                                    <li><a href="index.html">home version 1</a></li>
                                </ul>
                            </li>
                            <li><a href="">about</a></li>
                            <li class="mega-menu-position"><a href="shop.html">shop</a>
                                <ul class="mega-menu">
                                    <li>
                                        <ul>
                                            <li><a href="shop.html"><img alt="" src="{{url('public')}}/assets/img/banner/menu-img.jpg"></a></li>
                                            <li class="mega-menu-title">WoMen</li>
                                            <li><a href="shop.html">Bags & Purses</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="shop.html"><img alt="" src="{{url('public')}}/assets/img/banner/menu-img-2.jpg"></a></li>
                                            <li class="mega-menu-title">Men</li>
                                            <li><a href="shop.html">Bags</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="shop.html"><img alt="" src="{{url('public')}}/assets/img/banner/menu-img-3.jpg"></a></li>
                                            <li class="mega-menu-title">Accessories</li>
                                            <li><a href="shop.html">Belts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="shop.html"><img alt="" src="{{url('public')}}/assets/img/banner/menu-img-4.jpg"></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">list</a>
                                    <ul class="submenu">
                                        @foreach($cats as $cat)
                                        <li> <a href="{{route('categorynm',['id'=>$cat->id])}}">{{$cat->name}}</li>
                                        @endforeach
                                    </ul>
                             </li>
                             <li>
                                <a href="blog-left-sidebar.html">
                                    blogs
                                </a>
                                <ul class="submenu">
                                    <li><a href="">My Account</a></li>
                                </ul>
                            </li>
                            @if(Auth::check())
                            <li>
                                <a href="{{route('edit_account',['id' => Auth::user()->id])}}">
                                    My Account {{Auth::user()->id}}
                                </a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="header-search">
                    <form action="{{route('search')}}" class="header-search-form">
                        <input class="inp" name="search_key" type="text" placeholder="Find a product">
                        <button type="submit">
                            <i class="ion-ios-search-strong"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="#">HOME</a>
                                <ul>
                                    <li><a href="index.html">home version 1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="about-us.html">about us</a></li>
                                    <li><a href="cart-page.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="contact.html">contact us</a></li>
                                    <li><a href="contact.html">loging / register</a></li>
                                    <li><a href="shop.html">shop page</a></li>
                                    <li><a href="shop-list.html">shop list</a></li>
                                    <li><a href="product-details.html">product details</a></li>
                                    <li><a href="shop-grid-full-wide.html">shop grid full wide</a></li>
                                    <li><a href="shop-list-full-wide.html">shop list full wide</a></li>
                                </ul>
                            </li>
                            <li><a href="#">shop</a>
                                <ul>
                                    <li><a href="#">WoMen</a>
                                        <ul>
                                            <li><a href="shop.html">Bags & Purses</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Men</a>
                                        <ul>
                                            <li><a href="shop.html">Bags</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Accessories</a>
                                        <ul>
                                            <li><a href="shop.html">Belts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">BLOG</a>
                                <ul>
                                    <li><a href="blog.html">blog page</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html"> Contact us </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</header>
<div class="container">
         {{-- @if(Session::has('success'))
         <div class="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! Session::get('success') !!}
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! Session::get('error') !!}
        </div>
        @endif --}}
        @if(Session::has('error'))

        <div class="alert alert-success" id="success-alert" role="alert">
            <a href="#" class="alert-link"><strong>{!! Session::get('error') !!}</strong> </a>.
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success" id="success-alert" role="alert">
            <a href="#" class="alert-link"><strong>{!! Session::get('success') !!}</strong> </a>.
        </div>
        @endif


    </div>

    @yield('content')

    <footer class="footer-area padding-width-1">
        <div class="footer-top black-bg pt-80 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-3 col-md-4">
                        <div class="footer-widget mb-30">
                            <div class="footer-logo">
                                <a href="#"><img alt="" src="{{url('public')}}/assets/img/logo/logo-2.png"></a>
                            </div>
                            <div class="copyright">
                                <p>Copyright © 2018 <a href="#">dilan</a>. <br>all rights reserved</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-md-4">
                        <div class="footer-widget mb-30">
                            <div class="footer-title">
                                <h4>INFORMATION</h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-md-4">
                        <div class="footer-widget mb-30">
                            <div class="footer-title">
                                <h4>MY ACCOUNT</h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="wishlist.html">My wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-md-4">
                        <div class="footer-widget mb-30">
                            <div class="footer-title">
                                <h4>QUICK LINKS</h4>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="login-register.html">New User</a></li>
                                    <li><a href="contact.html">Help Center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-md-4">
                        <div class="footer-widget mb-30">
                            <div class="footer-title">
                                <h4>CONTACT US</h4>
                            </div>
                            <div class="footer-address">
                                <div class="single-footer-address">
                                    <div class="footer-address-icon">
                                        <i class="ion-ios-home-outline"></i>
                                    </div>
                                    <div class="footer-address-content">
                                        <p>169-C, Technohub, Dubai Silicon.</p>
                                    </div>
                                </div>
                                <div class="single-footer-address">
                                    <div class="footer-address-icon">
                                        <i class="ion-ios-telephone-outline"></i>
                                    </div>
                                    <div class="footer-address-content">
                                        <p>+08 888 345 6789</p>
                                    </div>
                                </div>
                                <div class="single-footer-address">
                                    <div class="footer-address-icon">
                                        <i class="ion-ios-email-outline"></i>
                                    </div>
                                    <div class="footer-address-content">
                                        <p><a href="#">info@example.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom ptb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="footer-social">
                            <ul>
                                <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li class="googleplus"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                                <li class="rss"><a href="#"><i class="ion-social-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="payment-img f-right">
                            <a href="#"><img alt="" src="{{url('public')}}/assets/img/icon-img/payment-img.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!-- all js here -->
    <script src="{{url('public')}}/assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="{{url('public')}}/assets/js/popper.js"></script>
    <script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/assets/js/ajax-mail.js"></script>
    <script src="{{url('public')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{url('public')}}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('public')}}/assets/js/plugins.js"></script>
    <script src="{{url('public')}}/assets/js/main.js"></script>

    <script type="text/javascript">
        $("#success-alert").fadeTo(3000, 500).slideUp(500, function(){ 
            $("#success-alert").slideUp(500); 
        }); 
    </script>

</body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/dilan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Dec 2018 17:06:10 GMT -->
</html>
{{-- @if(Auth::guest())
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{url('public')}}/assets/img/cart/2.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h3><a href="#">Unscented After- <br>Shave </a></h3>
                                            <span>$25.00</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#">x</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-total">
                                    <h4>Subtotal: <span>$50.00</span></h4>
                                </div>
                                <div class="shopping-cart-title">
                                    <h3><a href="#">Bạn chưa đăng nhập !</a></h3>
                                </div>
                                <div class="shopping-cart-btn flex">
                                    <a class="btn-style btn-hover" href="{{route('user_login')}}">Đăng Nhập</a>
                                    <a class="btn-style btn-hover" href="{{route('add_cart',['id' => '1' ])}}">view cart</a>
                                </div>


                                @else() --}}


