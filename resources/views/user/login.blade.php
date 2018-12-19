@extends('layouts\main')
@section('title','Login')
@section('content')

<div class="breadcrumb-area ptb-75 hm-4-padding">
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
					

<div class="login-register-area pb-80 ">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-12 ml-auto mr-auto">
				<div class="login-register-wrapper">
					<div class="login-register-tab-list nav">
						{{-- @if(Auth::guest()) --}}
						<a  data-toggle="tab" href="#lg1">
							<h4> login </h4>
						</a>
						<a href="{{route('user_register')}}">
							<h4> register </h4>
						</a>{{-- 
						@else
						bạn đã đăng nhập
						@endif --}}
					</div>
					{{-- @if(Auth::guest()) --}}
					<div class="tab-content">
						<div id="lg1" class="tab-pane active">
							<div class="login-form-container">
								<div class="login-register-form">
									<form action="#" method="post">

										<input class="inp" type="email" name="email" placeholder="Email">
										@if($errors->has('email'))
										<div class="help-block">
											{!! $errors->first('email') !!}
										</div>
										@endif

										<input class="inp" type="password" name="password" placeholder="Password">
										@if($errors->has('password'))
										<div class="help-block">
											{!! $errors->first('password') !!}
										</div>
										@endif
										<div class="button-box">
											<div class="login-toggle-btn">
												<input type="checkbox" name="remember" value="1">
												<label>Remember me</label>
												<a href="#">Forgot Password?</a>
											</div>
											<input class="inp" type="hidden" name="_token" value="{{csrf_token()}}">
											<button type="submit"><span>Login</span></button>
										</div>
									</form>
									
								</div>
							</div>
						</div>
					</div>{{-- 
					@else
					Bạn đã đăng nhập!
						
					@endif --}}



				</div>
			</div>
		</div>
	</div>
</div>
@stop()