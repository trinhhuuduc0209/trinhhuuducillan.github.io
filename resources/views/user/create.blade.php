@extends('layouts.main')


@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm tài khoản</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form">
			<legend>Vui lòng nhập đầy đủ thông tin!</legend>

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" name="name" value="{{old('name')}}"> 
				@if($errors->has('name'))
					<div class="help-block">
						{!! $errors->first('name') !!}
					</div>
				@endif
			</div>

			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" name="email" value="{{old('email')}}"> {{-- value="{{old('email')}}" giữ lại kí tự vừa nhập --}}
				@if($errors->has('email'))
					<div class="help-block">
						{!! $errors->first('email') !!}
					</div>
				@endif
			</div>

			<div class="form-group">
				<label for="">Phone</label>
				<input type="tel" class="form-control" name="phone" value="{{old('phone')}}"> 
				@if($errors->has('phone'))
					<div class="help-block">
						{!! $errors->first('phone') !!}
					</div>
				@endif
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="password">
				@if($errors->has('password'))
					<div class="help-block">
						{!! $errors->first('password') !!}
					</div>
				@endif
			</div>
			<div class="form-group">
				<label for="">Confirm password</label>
				<input type="password" class="form-control" name="confirm_password">
				@if($errors->has('confirm_password'))
					<div class="help-block">
						{!! $errors->first('confirm_password') !!}
					</div>
				@endif
			</div>
{{-- NOTE: name của các input trùng với tên của các field trong bảng users --}}


			<input type="hidden" name="_token" value="{{csrf_token()}}">
{{-- <input type="hidden" name="_token" value="{{xsrf_token()}}"> thuộc tích phải có --}}
			<button type="submit" class="btn btn-primary">Đăng Ký</button>
		</form>

	</div>
</div>
@stop()