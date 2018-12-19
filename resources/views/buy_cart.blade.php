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
        <div class="checkout-area pb-50 gray-bg">
            <div class="container">
                <h3 class="page-title">checkout</h3>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="checkout-wrapper">
                            <div id="faq" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-1">Checkout method</a></h5>
                                    </div>
                                    
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-2">billing information</a></h5>
                                    </div>
                                    <div id="payment-2" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                                <div class="row">
                                                    <form method="POST">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Tên*</label>
                                                                <input class="inp" name="name" type="text" value="{{Auth::user()->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Email Address*</label>
                                                                <input class="inp" name="email" type="email" value="{{Auth::user()->email}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Địa chỉ*</label>
                                                                <input class="inp" name="address" type="text" value="{{Auth::user()->address}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Telephone*</label>
                                                                <input class="inp" name="phone" type="tel" value="{{Auth::user()->phone}}">
                                                            </div>
                                                        </div>
                                                       </div>
                                                       {{csrf_field()}}
                                                     <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                                        </div>
                                                        <div class="billing-btn">
                                                            <button type="submit">Get a Quote</button>
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
                    <div class="col-lg-3">
                        <div class="checkout-progress">
                            <h4>Checkout Progress</h4>
                            <ul>
                                <li>Billing Address</li>
                                <li>Shipping Address</li>
                                <li>Shipping Method</li>
                                <li>Payment Method</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop()