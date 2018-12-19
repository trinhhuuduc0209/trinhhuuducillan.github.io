@extends('layouts\main')
@section('title','Login')
@section('content')

<div class="breadcrumb-area ptb-110 hm-4-padding">
	<div class="container">
		<div class="breadcrumb-content text-center">
			<h2>Login / Register</h2>
			<ul>
				<li><a href="#">home</a> <i class="ion-ios-arrow-right"></i></li>
				<li class="active">Login / Register</li>
			</ul>
		</div>
	</div>
</div>
<div class="login-register-area pb-120 ">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-12 ml-auto mr-auto">
				<div class="login-register-wrapper">
					<div class="login-register-tab-list nav register">
						{{-- @if(Auth::guest()) --}}
						<a href="{{route('user_login')}}">
							<h4> login </h4>
						</a>
						<a data-toggle="tab" href="#lg2">
							<h4> register </h4>
						</a>{{-- 
						@else
						@endif --}}
					</div>
					<div class="tab-content">
						{{-- @if(Auth::guest()) --}}


						<div id="lg2" class="tab-pane active">
							<div class="login-form-container register">
								<div class="login-register-form">
									<form action="#" method="post" enctype="multipart/form-data">
										<div class="col-md-12">
											<div class="row">
												<label><b>Họ và tên:</b></label>
												<input class="inp" c type="text" name="name" value="{{old('name')}}">
												@if($errors->has('name'))
												<div class="help-block">
													{!! $errors->first('name') !!}
												</div>
												@endif
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div>
															<label><b>Gender:</b></label><br>
															<label class="radio-inline">
																<input type="radio" name="gender" id="inlineRadio1" value="0"> Nam
															</label>
															<label class="radio-inline">
																<input type="radio" name="gender" id="inlineRadio1" value="1"> Nữ
															</label>
															<label class="radio-inline">
																<input type="radio" name="gender" id="inlineRadio1" value="2"> Giới tính khác
															</label>
														</div>
													</div>
													<div class="col-md-6">
													<label><b>Ảnh đại diện:</b></label><br>
														<input type="file" name="file_upload" value="{{old('image')}}" title="Thêm ảnh đại diện">
													</div>
												</div>
											</div>
										</div>


										
										<div class="col-md-12">
											<div class="row">
												<label><b>Email:</b></label>
												
												<input class="inp" type="email" name="email" value="{{old('email')}}">
												
												@if($errors->has('email'))
												<div class="help-block">
													{!! $errors->first('email') !!}
												</div>
												@endif
											</div>
										</div>
										<div class="col-md-12">
											<div class="row">
												<label><b>Phone:</b></label>
												
												
												<input class="inp" type="tel" name="phone" value="{{old('phone')}}">
												
												@if($errors->has('phone'))
												<div class="help-block">
													{!! $errors->first('phone') !!}
												</div>
												@endif
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<label><b>Password:</b></label>
														
														
														<input class="inp" type="password" name="password" >
														@if($errors->has('password'))
														<div class="help-block">
															{!! $errors->first('password') !!}
														</div>
													@endif
													
													</div>
													
													<div class="col-md-6">
														<label><b>Confirm Password:</b></label>
														
														
														<input class="inp" type="password" name="confirm_password">
														
														@if($errors->has('confirm_password'))
														<div class="help-block">
															{!! $errors->first('confirm_password') !!}
														</div>
														@endif
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="row">
												<label><b>Birthday:</b></label>
												<input class="inp" type="date" name="birthday" value="{{old('birthday')}}">
												@if($errors->has('birthday'))
												<div class="help-block">
													{!! $errors->first('birthday') !!}
												</div>
												@endif
											</div>
										</div>
										<input class="inp" type="hidden" name="_token" value="{{csrf_token()}}">
										<br>

										<div class="button-box text-center">
											<button type="submit"><span>Register</span></button>
										</div>
									</form>
								</div>
							</div>
						</div>{{-- 
						@else
						@endif --}}

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop()