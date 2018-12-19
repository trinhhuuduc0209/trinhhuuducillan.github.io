@extends('layouts.main')


@section('content')







<div class="slider-area padding-width-1 ptb-20 gray-bg clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="slider-active owl-carousel">
                    <div class="single-slider pt-200 pb-210 bg-img" style="background-image:url({{url('public')}}/assets/img/slider/1.jpg);">
                        <div class="slider-content slider-animated-1 pl-80">
                            <h3 class="animated">New Arrivals</h3>
                            <h2 class="animated">Women’s <span>fashion</span></h2>
                            <div class="slider-btn">
                                <a class="animated" href="product-details.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><div class="shop-wrapper gray-bg pb-80">  
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    <div class="shop-catigory-wrapper mb-55">
                        <h4 class="shop-catigory-title">Categories</h4>
                        {{-- <div class="shop-catigory"> --}}
                                    {{-- <ul id="faq">
                                        @foreach($cats as $cat)
                                        <li> <a data-toggle="collapse" data-parent="#faq" href="#shop-catigory-1">{{$cat->name}} <i class="ion-ios-arrow-down"></i></a>
                                        @endforeach
                                            <ul id="shop-catigory-1" class="panel-collapse collapse">
                                                @foreach($prods as $prod)
                                                    <li><a href="#">{{$prod->name}}</a></li>
                                                @endforeach
                                            </ul>

                                        </li>
                                    </ul> --}}
                                    @foreach($cats as $cat)
                                    <div class="shop-catigory">
                                        <ul id="faq">
                                            <li class="active"> <a data-toggle="collapse" data-parent="#faq" href="#{{$cat->id}}">{{$cat->name}} <i class="ion-ios-arrow-down"></i></a>
                                                <ul id="{{$cat->id}}" class="panel-collapse collapse">
                                                    <li ><a href="{{route('categorynm',['id'=>$cat->id])}}">{{$cat->name}}</a></li>
                                                    @foreach($cat->prodts as $prod)

                                                    <li><a href="{{route('categorynm',['id'=>$cat->id])}}">{{$prod->name}}</a></li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                        </ul>

                                    </div>
                                    @endforeach


                                {{-- </div> --}}
                            </div>
                            <div class="shop-price-filter mb-60">
                                <h4 class="shop-sidebar-title">FILTER BY PRICE</h4>
                                <div class="price_filter mt-40">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <label>price : </label>
                                            <input class="inp" type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button> 
                                    </div>
                                </div>
                            </div>
                            <div class="shop-widget mb-55">
                                <h4 class="shop-sidebar-title">select by color</h4>
                                <ul>
                                    <li>
                                        <a  href="#">Blue <span>(11)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-widget mb-55">
                                <h4 class="shop-sidebar-title">manufacturer</h4>
                                <ul>
                                    <li>
                                        <a  href="#">Gucci  <span>(8)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-widget mb-55">
                                <h4 class="shop-sidebar-title">compare product</h4>
                                <ul>
                                    <li>
                                        <a  href="#">Vinperl handbag <span>X</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="best-seller-area">
                                <h4 class="shop-sidebar-title">Best Sellers</h4>
                                <div class="best-seller-slider owl-carousel nav-style mt-30">
                                    @foreach($prods as $prod)
                                    <div class="best-seller-wrapper"><div class="single-best-seller-wrapper">
                                        <div class="best-seller-img">
                                            <a href="#"><img alt="" src="assets/img/product/best-seller-1.jpg"></a>
                                        </div>
                                        <div class="best-seller-content">
                                            <h4><a href="#">{{$prod->name}}</a></h4>
                                            <span>$15.99</span>
                                        </div>
                                    </div>
                                </div>rregbae
                                @endforeach

                                <div class="best-seller-wrapper">
                                    <div class="single-best-seller-wrapper">
                                        <div class="best-seller-img">
                                            <a href="#"><img alt="" src="assets/img/product/best-seller-4.jpg"></a>
                                        </div>
                                        <div class="best-seller-content">
                                            <h4><a href="#">Casual Lofffose Hollowed</a></h4>
                                            <span>$15.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop-topbar-wrapper">
                        <div class="col-md-2 grid-list-options">
                            <div class="row">
                                 <label>Hiển thị:</label>
                                <ul class="view-mode">
                                    <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ion-grid"></i></a></li>
                                    <li><a href="#product-list" data-view="product-list"><i class="ion-android-menu"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-12 product-sorting-wrapper">
                                    <div class="row">
                                        <div class="col-md-4 product-shorting shorting-style">
                                            <div class="row">
                                                <label>Sort by:</label>
                                                <select name="order_by">
                                                    <option value="price-desc">Giá từ thấp tới cao</option>
                                                    <option value="price-asc">Giá từ cao xuống thấp</option>
                                                    <option value="name-desc">Sản phẩm mới nhất</option>
                                                    <option value="name-asc">Sản phẩm cũ nhất</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 product-show shorting-style">
                                            <div class="row">
                                                <label>Show:</label>
                                                <select name="limit">
                                                    <option value="">Default</option>
                                                    <option value="2">2</option>
                                                    <option value="24">24</option>
                                                    <option value="36">36</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 product-show shorting-style">
                                            <div class="row">
                                                <label>Price:</label>
                                                <select name="price">
                                                    <option value="">Default</option>
                                                    <option value="0-100000">0-100.000đ</option>
                                                    <option value="100000-200000">100.000đ-200.000đ</option>
                                                    <option value="200000-400000">200.000đ-400.000đ</option>
                                                    <option value="400000-800000">400.000đ-800.000đ</option>
                                                    <option value="800000-1000000">800000-1000000</option>
                                                    <option value="1000000-100000000000000000">Từ 1 triệu trở lên</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="row">
                                                <button type="submit" class="style-odver">Let Go</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="grid-list-product-wrapper">
                        <div class="product-view product-grid">

                            <div class="row">
                                @foreach($prods as $prod)
                                <div class="product-width col-lg-6 col-xl-4 col-md-6">
                                    <div class="product-wrapper mb-30">
                                        <div class="product-img">
                                            <a href="{{route('prod_view_slug',['slug'=>$prod->slug])}}">
                                                <img src="{{url('public')}}/assets/img/product/{{$prod->image}}" alt="">
                                            </a>
                                            <div class="product-action">
                                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#{{$prod->id}}" href="#{{$prod->id}}">
                                                    <i class="ion-ios-eye-outline"></i>
                                                </a>
                                                <a class="action-heart" title="Wishlist" href="#">
                                                    <i class="ion-ios-heart-outline"></i>
                                                </a>
                                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#{{$prod->id}}" href="#">
                                                    <i class="ion-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{route('prod_view_slug',['slug'=>$prod->slug])}}">{{$prod->name}}</a></h4>
                                            <div class="product-price-cart-wrapper">
                                                <div class="product-rating-price-wrapper">
                                                    <div class="product-rating">
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                        <i class="ion-star"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>{{number_format($prod->price)}} đ</span>
                                                    </div>
                                                </div>
                                                <div class="product-cart">
                                                    <a title="Add To Cart" href="{{route('add_cart',['id' => $prod->id])}}"><i class="ion-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-content">
                                            <h4><a href="#">{{$prod->name}}</a></h4>
                                            <div class="product-rating">
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                                <i class="ion-star"></i>
                                            </div>
                                            <span>{{number_format($prod->price)}}</span>
                                            <p>{{$prod->description}}</p>
                                            <div class="product-list-action">
                                                <a title="Quick View" href="{{route('add_cart',['id' => $prod->id])}}"><i class="ion-bag"></i> Add to cart</a>
                                                <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                                                <a title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ion-stats-bars"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination-style f-right mt-20">
                            {{-- {{$prods->links()}} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @foreach($prods as $prod)
    <div class="modal fade" id="{{$prod->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="ion-android-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="{{url('public')}}/assets/img/product/{{$prod->image}}" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="{{url('public')}}/assets/img/product/{{$prod->image}}" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="{{url('public')}}/assets/img/product/{{$prod->image}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                <img src="{{url('public')}}/assets/img/product/{{$prod->image}}" width="70px" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                <img src="{{url('public')}}/assets/img/product/{{$prod->image}}" width="70px" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                <img src="{{url('public')}}/assets/img/product/{{$prod->image}}" width="70px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>{{$prod->name}}</h3>
                            <div class="product-price">
                                <span class="old">{{$prod->price}}</span>
                                <span class="new">{{$prod->sale_price}}</span>
                            </div>
                            <div class="product-rating">
                                <i class="ion-star theme-color"></i>
                                <i class="ion-star theme-color"></i>
                                <i class="ion-star theme-color"></i>
                                <i class="ion-star theme-color"></i>
                                <i class="ion-star"></i>
                            </div>
                            <p>{{$prod->description}}</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">XS</option>
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value=""> L</option>
                                        <option value="">XL</option>
                                        <option value="">XXL</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input class="inp" type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-style cr-btn" href="#"><span>add to cart</span></a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover cr-btn" href="#"><span><i class="ion-ios-heart-outline"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></a>
    @endforeach
    @stop()
    {{-- <tr> --}}
        {{-- <td>{{$prod->id}}</td> --}}
        {{-- <td>{{$prod->name}}</td> --}}
        {{-- <td>Mô tả dài quá nên không cho hiện</td> --}}
        {{-- {{$prod->description}} --}}
        {{-- <td><img src="{{url('/')}}/uploads/{{$prod->image}}" width="60px" alt=""></td> --}}
        {{-- <td>{{$prod->price}}</td> --}}
        {{-- <td>{{$prod->sale_price}}</td> --}}
        {{-- <td> --}}
            {{-- @if($prod->status == 1) --}}
                        {{--    
                                Active
                            @else
                                No active
                            @endif
                        </td>
                        <td>{{$prod->created_at}}</td>
                    </tr>
                    --}}
