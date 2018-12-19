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
</div>
<div class="breadcrumb-area ptb-75 hm-4-padding gray-bg">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>women</h2>
            <ul>
                <li><a href="#">home</a> <i class="ion-ios-arrow-right"></i></li>
                <li><a href="#">Women</a> <i class="ion-ios-arrow-right"></i></li>
                <li class="active">{{$model->name}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="product-details-area gray-bg pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-tab">
                    <div class="product-details-large tab-content">
                        @if($model->pro_img->count())
                        @foreach($model->pro_img as $i => $img)
                        <?php $active = $i == 0 ? 'active' : ''; ?>
                        <div class="tab-pane {{$active}}" id="{{$img->id}}">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="{{url('public')}}/assets/img/product/{{$img->link_img}}">
                                        <img src="{{url('public')}}/assets/img/product/{{$img->link_img}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="tab-pane active" id="{{$model->id}}">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <img src="{{url('public')}}/assets/img/product/{{$model->image}}" alt="">
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="product-details-small nav mt-12" role=tablist>
                        @if($model->pro_img->count())
                        @foreach($model->pro_img as $img)
                        <a class="{{$active}}" href="#{{$img->id}}" data-toggle="tab">
                            <img src="{{url('public')}}/assets/img/product/{{$img->link_img}}" alt="">
                        </a>
                        @endforeach
                        @else
                        <a class="active" href="#{{$model->id}}" data-toggle="tab">
                            <img src="{{url('public')}}/assets/img/product/{{$model->image}}" alt="">
                        </a>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h4>{{$model->name}}</h4>
                    <div class="product-rating">
                        <i class="ion-star theme-color"></i>
                        <i class="ion-star theme-color"></i>
                        <i class="ion-star theme-color"></i>
                        <i class="ion-star"></i>
                        <i class="ion-star"></i>
                    </div>
                    <span>{{$model->sale_price}}</span>
                    <span>{{$model->price}}</span>
                    <div class="in-stock">
                        <span><i class="ion-android-checkbox-outline"></i> In Stock</span>
                    </div>
                    <div class="sku">
                        <span>SKU#: {{$model->id}}</span>
                    </div>
                    <p></p>
                    <div class="product-details-style shorting-style">
                        <label>color:</label>
                        <select>
                            <option value=""> Choose an option</option>
                            <option value=""> orange</option>
                            <option value=""> pink</option>
                            <option value=""> yellow</option>
                        </select>
                    </div>
                            
                    <div class="cart-plus-minus-2-wrapper">

                        <label>Qty:</label>
                        <div class="cart-plus-minus-2">
                            <input id="inp" class="inp" type="text" value="0" name="qtybutton" class="cart-plus-minus-box">
                            <div class="inc qtybutton">-</div>
                            <div class="dec qtybutton">+</div>
                        </div>
                    </div>
                    <div class="product-list-action">
                        <a class="icon-mrg" title="Quick View" href="#"><i class="ion-bag"></i> Add to cart</a>
                        <a title="Wishlist" href="#"><i class="ion-ios-heart-outline"></i></a>
                        <a title="Compare" href="#"><i class="ion-stats-bars"></i></a>
                    </div>
                    <div class="social-share">
                        <ul>
                            <li><span>Share:</span></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area gray-bg pb-75">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav text-center">
                <a class="active" data-toggle="tab" href="#des-details1">DESCRIPTION</a>
                <a data-toggle="tab" href="#des-details2">MORE INFORMATION</a>
                <a data-toggle="tab" href="#des-details3">REVIEWS (2)</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details1" class="tab-pane active">
                    <div class="product-description-wrapper">
                        {!! $model->description !!}
                    </div>
                </div>
                <div id="des-details2" class="tab-pane">
                    <div class="product-anotherinfo-wrapper">
                        <ul>
                            <li><span>name:</span> Scanpan Classic Covered</li>
                            <li><span>color:</span> orange , pink , yellow </li>
                            <li><span>size:</span> xl, l , m , sl</li>
                            <li><span>length:</span> 102cm, 110cm , 115cm </li>
                            <li><span>Brand:</span> Nike, Religion, Diesel, Monki </li>
                        </ul>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane">
                    <div class="rattings-wrapper">
                        <div class="sin-rattings">
                            <div class="star-author-all">
                                <div class="ratting-star f-left">
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="ratting-author f-right">
                                    <h3>farhana shuvo</h3>
                                    <span>12:24</span>
                                    <span>9 March 2018</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                        </div>
                    </div>
                    <div class="ratting-form-wrapper">
                        <h3>Add your Comments :</h3>
                        <div class="ratting-form">
                            <form action="#">
                                <div class="star-box">
                                    <h2>Rating:</h2>
                                    <div class="ratting-star">
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="rating-form-style mb-20">
                                            <input class="inp" placeholder="Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="rating-form-style mb-20">
                                            <input class="inp" placeholder="Email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="rating-form-style form-submit">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <input class="inp" type="submit" value="add review">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="featured-area gray-bg pb-75">
    <div class="container">
        <div class="section-title text-center mb-25">
            <h2>Sản phẩm dang sale</h2>
        </div>
        <div class="row">
            <div class="product-slider-active owl-carousel">

                @foreach($pdos as $pos)
                <div class="col-lg-3">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="{{route('product_slug',['slug'=>$pos->slug])}}">
                                <img src="{{url('public')}}/assets/img/product/{{$pos->image}}" alt="">
                            </a>
                            <div class="product-action">
                                <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ion-ios-eye-outline"></i>
                                </a>
                                <a class="action-heart" title="Wishlist" href="#">
                                    <i class="ion-ios-heart-outline"></i>
                                </a>
                                <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="ion-stats-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="{{route('product_slug',['slug'=>$pos->slug])}}">{{$pos->name}}</a></h4>
                            <div class="product-price-cart-wrapper">
                                <div class="product-rating-price-wrapper">
                                    <div class="product-rating">
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                        <i class="ion-star theme-color"></i>
                                    </div>
                                    <div class="product-price">
                                        <span class="old">{{$pos->price}} </span>
                                        <span class="new">{{$pos->sale_price}}</span>
                                    </div>
                                </div>
                                <div class="product-cart">
                                    <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach                        
                
            </div>
        </div>
    </div>
</div>
<div class="featured-area gray-bg pb-75">
    <div class="container">
        <div class="section-title text-center mb-25">
            <h2>Sản Phẩm Tương TỰ </h2>
        </div>
        <div class="row">
            <div class="product-slider-active owl-carousel">
               @foreach($pdos as $pos)
               <div class="col-lg-3">
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="{{route('product_slug',['slug'=>$pos->slug])}}">
                            <img src="{{url('public')}}/assets/img/product/{{$pos->image}}" alt="">
                        </a>
                        <div class="product-action">
                            <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="ion-ios-eye-outline"></i>
                            </a>
                            <a class="action-heart" title="Wishlist" href="#">
                                <i class="ion-ios-heart-outline"></i>
                            </a>
                            <a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                <i class="ion-stats-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="{{route('product_slug',['slug'=>$pos->slug])}}">{{$pos->name}}</a></h4>
                        <div class="product-price-cart-wrapper">
                            <div class="product-rating-price-wrapper">
                                <div class="product-rating">
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                </div>
                                <div class="product-price">
                                    <span>{{$pos->price}}</span>
                                </div>
                            </div>
                            <div class="product-cart">
                                <a title="Add To Cart" href="#"><i class="ion-bag"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach                        
        </div>
    </div>
</div>
</div>

@stop()