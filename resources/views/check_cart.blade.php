@extends('layouts.main')
@section('content')
<div class="breadcrumb-area ptb-75 hm-4-padding gray-bg">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Shopping cart</h2>
                    <ul>
                        <li><a href="#">home</a> <i class="ion-ios-arrow-right"></i></li>
                        <li class="active">Shopping cart </li>
                    </ul>
                </div>
            </div>
        </div>
         <!-- shopping-cart-area start -->
        <div class="cart-main-area pb-80 gray-bg">
            <div class="container">
                <h3 class="page-title">Your cart items</h3>
                	@if($carts->totalQty != 0)
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="update_cart">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr class="text-center">
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                		@foreach($carts->items as $item)
                                		<input type="hidden" name="id[]" value="{{$item['id']}}">
	                                        <tr  class="text-center">
	                                            <td class="product-thumbnail">
	                                                <a href="#"><img src="{{url('public')}}/assets/img/product/{{$item['image']}}" width="150px" alt="Black-Shop" title="Black-Shop"></a>
	                                            </td>
	                                            <td class="product-name"><a href="#">{{$item['name']}} </a></td>
	                                            <td class="product-quantity">
	                                                <div class="cart-plus-minus">
	                                                    <input class="cart-plus-minus-box" type="text" name="quantity[]" value="{{$item['quantity']}}">
	                                                </div>
	                                            </td>
	                                            <td class="product-subtotal">${{number_format($item['price'])}}</td>
	                                            <td class="product-remove"><a  style="padding: 50px; font-size: 35px" href="{{route('remode_cart', ['id' => $item['id']])}}"><i class="ion-android-delete"></i></a></td>
	                                        </tr>
	                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="{{route('homenm')}}">Continue Shopping</a>
                                            <button type="submit">Update Shopping Cart</button>
                                        </div>
                                        <div class="cart-clear">
                                            <a href="#">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="cart-tax">
                                    <h4 class="cart-bottom-title">Estimate Shipping And Tax</h4>
                                    <div class="tax-wrapper">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label>
                                                    Country
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    State/Province
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    Zip/Postal Code
                                                </label>
                                                <input class="inp" type="text" placeholder="1234567">
                                            </div>
                                            <button class="cart-btn-2" type="submit">Get A Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="discount-code-wrapper">
                                    <h4 class="cart-bottom-title">DISCOUNT CODES</h4>
                                    <div class="discount-code">
                                        <p>Enter your coupon code if you have one.</p>
                                        <form>
                                            <input class="inp" type="text" required="" name="name">
                                            <button class="cart-btn-2" type="submit">Get A Quote</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="grand-totall">
                                    <h5>Grand Total:   £{{number_format($carts->totalAmount)}}</h5>
                                    <a href="#">Proceed To Checkout</a>
                                    <p>Checkout with Multiple Addresses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @else
                    <div class="jumbotron">
                    	<div class="container">
                    		<h1>Chưa có sản phẩm nào trong giỏ hàng !</h1>
                    		<p>Black - Shop</p>
                    		<p>
                    			<a class="btn btn-danger btn-lg" href="{{route('homenm')}}">Continue Shopping</a>
                    		</p>
                    	</div>
                    </div>
                    @endif
            </div>
        </div>
@stop()