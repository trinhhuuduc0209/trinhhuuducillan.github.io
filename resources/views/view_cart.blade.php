@extends('layouts.main')
@section('content')
<div class="breadcrumb-area ptb-75 hm-4-padding gray-bg">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>View Cart</h2>
            <ul>
                <li><a href="#">home</a> <i class="ion-ios-arrow-right"></i></li>
                <li class="active">View Cart </li>
            </ul>
        </div>
    </div>
</div>
<!-- shopping-cart-area start -->
<div class="cart-main-area pb-80 gray-bg">
    <div class="container">
        <h3 class="page-title">{{Auth::user()->name}}</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="table-content table-responsive">
                    <table>
                        <thead>
                            <tr class="text-center">
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Số Lượng</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>    
                        <tbody>
                            @foreach($view_cart as $key => $ord_dt)
                            <tr  class="text-center">
                                <td>{{$key+1}}</td>
                                <td>
                                    <img src="{{url('public')}}/assets/img/product/{{$ord_dt->product->image}}" width="75px" alt="Balck - Shop" title="{{$ord_dt->product->image}}">
                                </td>
                                <td>{{$ord_dt->product->name}}</td>
                                <td>
                                   ${{number_format($ord_dt->price)}}
                                </td>
                                <td>
                                   {{number_format($ord_dt->quantity)}}
                                </td>
                                <td>
                                    ${{number_format($ord_dt->price * $ord_dt->quantity)}}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop()