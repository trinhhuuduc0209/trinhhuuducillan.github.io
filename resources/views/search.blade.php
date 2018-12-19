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
<div class="product-area pt-45 pb-80 gray-bg">
	<div class="container">
		<div class="product-tab-list text-center mb-30 nav product-menu-mrg" role="tablist">

			@foreach($cats as $cat)
			<a class="active" href="{{route('categorynm',['id'=>$cat->id])}}">
				<h4>{{$cat->name}} </h4>
			</a>
			@endforeach        
		</div>
		<div class="tab-content jump">
			<div class="tab-pane active" id="home1">
				<div class="row">
					@foreach($prods as $prod)
					<div class="col-lg-3">
						<div class="product-wrapper">
							<div class="product-img">
								<a href="{{route('product_slug',['slug'=>$prod->slug])}}">
									<img src="{{url('public')}}/assets/img/product/{{$prod->image}}" alt="">
								</a>
								<div class="product-action">
									<a class="action-plus" title="Quick View" data-toggle="modal" data-target="#{{$prod->id}}" href="#{{$prod->id}}">
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
								<h4><a href="{{route('product_slug',['slug'=>$prod->id])}}">{{$prod->name}}</a></h4>
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
											<span>$ {{$prod->price}}đ </span>
										</div>
									</div>
									<div class="product-cart">
										<a title="Add To Cart" href="{{route('add_cart',['id' => $prod->id])}}"><i class="ion-bag"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach


				</div>
			</div>
			<div class="tab-pane" id="home2">
				<div class="row">
					<div class="product-slider-active owl-carousel">
						PRODUCT 2
					</div>
				</div>
			</div>
			<div class="tab-pane" id="home3">
				<div class="row">
					<div class="product-slider-active owl-carousel">
						PRODUCT 3
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="discount-area pt-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-5">
				<div class="discount-wrapper text-center">
					<h4>New Arrivals!</h4>
					<h2>Women Collection 30% Off <br>Autumn Fashion</h2>
					<p>We sell not only top quality products, but give our customers a 
					positive online shopping experience.</p>
					<div class="overview-btn">
						<a class="btn-style btn-hover" href="product-details.html">Shop now!</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-7">
				<div class="discount-img wow fadeInRight res-mrg-top-small">
					<a href="#"><img alt="" src="{{url('public')}}/assets/img/banner/banner-6.jpg"></a>
				</div>
			</div>
		</div>
	</div>
</div>






<div class="deals-area gray-bg ptb-75">
	<div class="container">
		<div class="section-title text-center">
			<h2>DEALS OF THE week</h2>
		</div>
		<div class="timer mb-30">
			<div data-countdown="2018/07/01"></div>
		</div>
		<div class="row">
			<div class="deals-slider-active owl-carousel">
				<div class="col-lg-6">
					<div class="deal-product-wrappers">
						<div class="deal-action-img-wrapper">
							<div class="deal-product-action">
								<a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
									<i class="ion-ios-eye-outline"></i>
								</a>
								<a class="action-heart" title="Add To Cart" href="#">
									<i class="ion-bag"></i>
								</a>
								<a class="action-heart" title="Wishlist" href="#">
									<i class="ion-ios-heart-outline"></i>
								</a>
								<a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
									<i class="ion-stats-bars"></i>
								</a>
							</div>
							<div class="deal-product-img">
								<a href="product-details.html"><img alt="" src="{{url('public')}}/assets/img/product/product-6.jpg"></a>
							</div>
						</div>
						<div class="deal-product-content">
							<h4><a href="product-details.html">Pocket Long Sleeve</a></h4>
							<div class="product-rating">
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
							</div>
							<P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
							<div class="product-price">
								<span class="old">$55.00 </span>
								<span class="new">$45.99</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="deal-product-wrappers">
						<div class="deal-action-img-wrapper">
							<div class="deal-product-action">
								<a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
									<i class="ion-ios-eye-outline"></i>
								</a>
								<a class="action-heart" title="Add To Cart" href="#">
									<i class="ion-bag"></i>
								</a>
								<a class="action-heart" title="Wishlist" href="#">
									<i class="ion-ios-heart-outline"></i>
								</a>
								<a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
									<i class="ion-stats-bars"></i>
								</a>
							</div>
							<div class="deal-product-img">
								<a href="product-details.html"><img alt="" src="{{url('public')}}/assets/img/product/product-10.jpg"></a>
							</div>
						</div>
						<div class="deal-product-content">
							<h4><a href="product-details.html">Absolute Workout Jacket</a></h4>
							<div class="product-rating">
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
							</div>
							<P>Ready made for the great outdoors, Patagonia create high-quality clothing for the all-round active. </P>
							<div class="product-price">
								<span class="old">$38.75 </span>
								<span class="new">$27.75</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="deal-product-wrappers">
						<div class="deal-action-img-wrapper">
							<div class="deal-product-action">
								<a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
									<i class="ion-ios-eye-outline"></i>
								</a>
								<a class="action-heart" title="Add To Cart" href="#">
									<i class="ion-bag"></i>
								</a>
								<a class="action-heart" title="Wishlist" href="#">
									<i class="ion-ios-heart-outline"></i>
								</a>
								<a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
									<i class="ion-stats-bars"></i>
								</a>
							</div>
							<div class="deal-product-img">
								<a href="product-details.html"><img alt="" src="{{url('public')}}/assets/img/product/product-11.jpg"></a>
							</div>
						</div>
						<div class="deal-product-content">
							<h4><a href="product-details.html">Pocket Long Sleeve</a></h4>
							<div class="product-rating">
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
							</div>
							<P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
							<div class="product-price">
								<span class="old">$55.00 </span>
								<span class="new">$45.99</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="deal-product-wrappers">
						<div class="deal-action-img-wrapper">
							<div class="deal-product-action">
								<a class="action-plus" title="Quick View" data-toggle="modal" data-target="#{{$prod->id}}" href="#">
									<i class="ion-ios-eye-outline"></i>
								</a>
								<a class="action-heart" title="Add To Cart" href="#">
									<i class="ion-bag"></i>
								</a>
								<a class="action-heart" title="Wishlist" href="#">
									<i class="ion-ios-heart-outline"></i>
								</a>
								<a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
									<i class="ion-stats-bars"></i>
								</a>
							</div>
							<div class="deal-product-img">
								<a href="product-details.html"><img alt="" src="{{url('public')}}/assets/img/product/product-12.jpg"></a>
							</div>
						</div>
						<div class="deal-product-content">
							<h4><a href="product-details.html">Absolute Workout Jacket</a></h4>
							<div class="product-rating">
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
							</div>
							<P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
							<div class="product-price">
								<span class="old">$38.75 </span>
								<span class="new">$27.75</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="deal-product-wrappers">
						<div class="deal-action-img-wrapper">
							<div class="deal-product-action">
								<a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
									<i class="ion-ios-eye-outline"></i>
								</a>
								<a class="action-heart" title="Add To Cart" href="#">
									<i class="ion-bag"></i>
								</a>
								<a class="action-heart" title="Wishlist" href="#">
									<i class="ion-ios-heart-outline"></i>
								</a>
								<a class="action-cart" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
									<i class="ion-stats-bars"></i>
								</a>
							</div>
							<div class="deal-product-img">
								<a href="product-details.html"><img alt="" src="{{url('public')}}/assets/img/product/product-13.jpg"></a>
							</div>
						</div>
						<div class="deal-product-content">
							<h4><a href="product-details.html">Absolute Workout Jacket</a></h4>
							<div class="product-rating">
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
								<i class="ion-star"></i>
							</div>
							<P>In the late 1960s, The North Face was founded in California by two hiking enthusiasts. </P>
							<div class="product-price">
								<span class="old">$38.75 </span>
								<span class="new">$27.75</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>









<div class="services-area pt-65 pb-35 black-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="services-wrapper text-center mb-40">
					<i class="ion-android-sync"></i>
					<h4>Return & Exchange</h4>
					<p>Committed to return the money in 30 days</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="services-wrapper text-center mb-40">
					<i class="ion-card"></i>
					<h4>RECIEVE GIFT CARD</h4>
					<p>Receive gift all over order $50</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="services-wrapper text-center mb-40">
					<i class="ion-help-buoy"></i>
					<h4>ONLINE SUPPORT 24/7</h4>
					<p>24/7 online support is always ready</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="new-collection-testimonials-area ptb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="new-collection-wrapper">
					<a href="#"><img src="{{url('public')}}/assets/img/banner/banner-7.jpg" alt=""></a>
					<div class="new-collection-content">
						<h2>Accent Your <br>Style with <br>New Collection</h2>
						<div class="new-collection-btn">
							<a class="btn-style" href="#">View collection</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="testimonials-area text-center black-bg-2 res-mrg-top-md res-mrg-top-small">
					<div class="section-title text-center">
						<h2>testimonials</h2>
					</div>
					<div class="testimonial-active owl-carousel">
						<div class="single-testimonial">
							<p>“ Perfect Themes and the best of all that you have many options to choose! Best Support team ever!Very fast responding and experts on their fields! Thank you very much! ”</p>
							<h4>Stefano  Colombarolli - CEO</h4>
						</div>
						<div class="single-testimonial">
							<p>“ Lorem ipsum dolor sit amet, consectetl adipisicing elit, sed do eiusmod tempor incididul ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud”</p>
							<h4>Teresa McDonald - CEO</h4>
						</div>
						<div class="single-testimonial">
							<p>“ Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et voluptas.”</p>
							<h4>Douglas Allen - CEO</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="featured-area gray-bg pb-80 pt-75">
	<div class="container">
		<div class="section-title text-center mb-25">
			<h2>FEATURED FASHION DRESS</h2>
		</div>
		<div class="row">
			<div class="product-slider-active owl-carousel">
				PRODUCT 2
			</div>
		</div>
	</div>
</div>
<div class="blog-area pt-75 pb-130">
	<div class="container">
		<div class="section-title text-center mb-75">
			<h2>latest blogs</h2>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="blog-wrapper">
					<div class="blog-img">
						<a href="blog-details.html"><img alt="" src="{{url('public')}}/assets/img/blog/blog-1.jpg"></a>
					</div>
					<div class="blog-content">
						<span>27 - apr - 2018</span>
						<h3><a href="blog-details.html">14 Emerging Fashion Influencers Who Are Going to Own 2018</a></h3>
						<div class="blog-btn">
							<a href="blog-details.html">View more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="blog-wrapper blog-mrg">
					<div class="blog-img">
						<a href="blog-details.html"><img alt="" src="{{url('public')}}/assets/img/blog/blog-2.jpg"></a>
					</div>
					<div class="blog-content">
						<span>21 - apr - 2018</span>
						<h3><a href="blog-details.html">10 Overdone Fashion Trends That Aren’t Invited to 2018</a></h3>
						<div class="blog-btn">
							<a href="blog-details.html">View more</a>
						</div>
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
        <!-- Compare -->
        <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="ion-android-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-compare-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="#">
                            <div class="table-content compare-style table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <a href="#">Remove <span>x</span></a>
                                                <img src="assets/img/quick-view/compare-1.jpg" alt="">
                                                <p>Casual Loose Hollowed </p>
                                                <span>$75.99</span>
                                                <a class="compare-btn" href="cart.html">Add to cart</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="compare-title"><h4>Description </h4></td>
                                            <td class="compare-dec compare-common">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Sku </h4></td>
                                            <td class="product-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Availability  </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>In stock</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Weight   </h4></td>
                                            <td class="compare-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Dimensions   </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>N/A</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>brand   </h4></td>
                                            <td class="compare-brand compare-common">
                                                <p>HasTech</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>color   </h4></td>
                                            <td class="compare-color compare-common">
                                                <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>size    </h4></td>
                                            <td class="compare-size compare-common">
                                                <p>XS, S, M, L, XL, XXL </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"></td>
                                            <td class="compare-price compare-common">
                                                <p>$75.99 </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
