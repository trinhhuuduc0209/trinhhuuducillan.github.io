@extends('layouts.main')
@section('content')
<div class="breadcrumb-area ptb-75 hm-4-padding gray-bg">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>my account</h2>
            <ul>
                <li><a href="#">home</a> <i class="ion-ios-arrow-right"></i></li>
                <li class="active">my account </li>
            </ul>
        </div>
    </div>
</div>
<!-- my account start -->
<div class="checkout-area pb-50 gray-bg">
    <div class="container">
        <div class="row">
            <div class="ml-auto mr-auto col-lg-9">
                <div class="checkout-wrapper">
                    <div id="faq" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>1</span> <a href="{{route('edit_account',['id' => Auth::user()->id])}}">Edit your account information </a></h5>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-2">Change your password </a></h5>
                            </div>
                            <div id="my-account-2" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="billing-information-wrapper">
                                        <div class="account-info-wrapper">
                                            <h4>Change Password</h4>
                                            <h5>Your Password</h5>
                                        </div>
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Mật khẩu cũ</label>
                                                        <input class="inp" name="old_password" type="password">
                                                    </div>
                                                    @if($errors->has('old_password'))
                                                    <div class="help-block">
                                                        {!! $errors->first('old_password') !!}
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Mật Khẩu mới</label>
                                                        <input class="inp"  name="password" type="password">
                                                    </div>
                                                    @if($errors->has('password'))
                                                    <div class="help-block">
                                                        {!! $errors->first('password') !!}
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Nhập lại mật khẩu</label>
                                                        <input class="inp" name="confirm_password" type="password">
                                                    </div>
                                                    @if($errors->has('confirm_password'))
                                                    <div class="help-block">
                                                        {!! $errors->first('confirm_password') !!}
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-back">
                                                    <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                                </div>
                                                {{csrf_field()}}
                                                <div class="billing-btn">
                                                    <button type="submit">Xác nhận mật khẩu mới</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>3</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-3">Modify your address book entries   </a></h5>
                            </div>
                            <div id="my-account-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="billing-information-wrapper">
                                        <div class="account-info-wrapper">
                                            <h4>Address Book Entries</h4>
                                        </div>
                                        <div class="entries-wrapper">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                    <div class="entries-info text-center">
                                                        <p>Farhana hayder (shuvo) </p>
                                                        <p>hastech </p>
                                                        <p> Road#1 , Block#c </p>
                                                        <p> Rampura. </p>
                                                        <p>Dhaka </p>
                                                        <p>Bangladesh </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                                                    <div class="entries-edit-delete text-center">
                                                        <a class="edit" href="#">Edit</a>
                                                        <a href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="submit">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>4</span> <a href="wishlist.html">Modify your wish list   </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop