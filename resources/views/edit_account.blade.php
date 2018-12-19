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
                                <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-1">Edit your account information </a></h5>
                            </div>
                            <div id="my-account-1" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="billing-information-wrapper">
                                        <div class="account-info-wrapper">
                                            <h4>My Account Information</h4>
                                            <h5>Your Personal Details</h5>
                                        </div>
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>First Name:</label>
                                                        <input class="inp" name="name" type="text" value="{{Auth::user()->name}}">
                                                    </div>
                                                    @if($errors->has('name'))
                                                    <div class="help-block">
                                                        {!! $errors->first('name') !!}
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Avatar:</label>
                                                        <div class="row">
                                                         <div class="col-md-12">
                                                           <div class="row">
                                                               <div class="col-md-5">
                                                                  <a href="#" class="thumbnail">
                                                                      <img src="{{url('public')}}/assets/img/product/{{Auth::user()->image}}" style="width: 70px;height: 70px; border-radius: 50%" alt="">
                                                                  </a>
                                                              </div>
                                                              <div class="col-md-6">
                                                                  <caption>
                                                                      <input class="inp" type="file" name="img_edit" value="{{Auth::user()->image}}">
                                                                  </caption>
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                              <div class="col-lg-6 col-md-6">
                                                  <div class="billing-info">
                                                      <label>Email Address:</label>
                                                      <input class="inp" name="email" type="email" value="{{Auth::user()->email}}">

                                                  </div>
                                                  @if($errors->has('name'))
                                                    <div class="help-block">
                                                        {!! $errors->first('name') !!}
                                                    </div>
                                                    @endif
                                              </div>

                                              <div class="col-lg-6 col-md-6">
                                                  <div class="billing-info">
                                                      <label>Ngày Sinh:</label>
                                                      <input class="inp" name="email" type="date" value="{{Auth::user()->birthday}}">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Telephone:</label>
                                                    <input class="inp" name="phone" type="text" value="{{Auth::user()->phone}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label style="margin-bottom: 20px">Gender:</label><br>
                                                    @if(Auth::user()->gender == 0)
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio1" value="0" checked> Nam
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio1" value="1"> Nữ
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio1" value="2"> Giới tính khác
                                                    </label>
                                                    @elseif (Auth::user()->gender == 1)
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio1" value="0"> Nam
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio1" value="1" checked> Nữ
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio1" value="2"> Giới tính khác
                                                    </label>
                                                    @elseif (Auth::user()->gender == 2)
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio1" value="0"> Nam
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio1" value="1"> Nữ
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio1" value="2" checked> Giới tính khác
                                                    </label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="billing-back-btn">
                                <div class="billing-back">
                                    <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                                </div>
                                <div class="billing-btn">
                                    <input class="inp" type="hidden" name="_token" value="{{csrf_token()}}">
                                    <button type="submit">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title"><span>2</span> <a href="{{route('chane_pass',['id' => Auth::user()->id])}}">Change your password </a></h5>
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