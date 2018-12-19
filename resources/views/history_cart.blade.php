@extends('layouts.main')
@section('content')
<div class="breadcrumb-area ptb-75 hm-4-padding gray-bg">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>History cart</h2>
            <ul>
                <li><a href="#">home</a> <i class="ion-ios-arrow-right"></i></li>
                <li class="active">History cart </li>
            </ul>
        </div>
    </div>
</div>
<!-- shopping-cart-area start -->
<div class="cart-main-area pb-80 gray-bg">
    <div class="container">
        <h3 class="page-title">Lịch sử đặt hàng</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="table-content table-responsive">
                    <table>
                        <thead>
                            <tr class="text-center">
                                <th>STT</th>
                                <th>Ngày Đặt</th>
                                <th>Số lượng sản phẩm</th>
                                <th>Tổng Tiền</th>
                                <th>Trạng Thái</th>
                                <th></th>
                            </tr>
                        </thead>    
                        <tbody>
                            @foreach($order as $key => $ord_dt)
                            <tr  class="text-center">
                                <td>{{$key+1}}</td>
                                <td>{{$ord_dt->created_at}}</td>
                                <td>
                                   {{number_format($ord_dt->ord_detai->sum('quantity'))}}
                                </td>
                                <td>
                                   ${{number_format($ord_dt->ord_detai->sum('price'))}}
                                </td>
                                <td>
                                    @if($ord_dt->status == 2)
                                       <span style="background: #00c0ef;font-size: 12px;padding: 5px;border-radius: 10px;color: #fff;">Đã giao hàng</span>
                                    @elseif($ord_dt->status == 1)
                                        <span style="background: #e48958;font-size: 12px;padding: 5px;border-radius: 3px;color: #fff;">Đã duyệt</span>
                                    @elseif($ord_dt->status == 0)
                                        <span style="background: red;font-size: 12px;padding: 5px;border-radius: 3px;color: #fff;">Chưa duyệt</span>
                                    @endif
                                </td>
                                <td><a href="{{route('view_cart',['id' => $ord_dt->id])}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true">View</td>

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