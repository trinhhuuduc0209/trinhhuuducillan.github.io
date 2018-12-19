@extends('layouts.main')


@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách tài khoản</h3>
	</div>
	<div class="panel-body">
		<p>
			<a href="{{route('user_create')}}" class="btn btn-sm btn-danger">Đăng Nhập</a>
			<a href="{{route('user_create')}}" class="btn btn-sm btn-info">Đăng Ký</a>
			{{-- Link tới trang thêm mới --}}
		</p>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@foreach($users as $u)
				<tr>
					<td>{{$u->id}}</td>
					<td>{{$u->name}}</td>
					<td>{{$u->phone}}</td>
					<td>{{$u->email}}</td>
					<td>
						<a href="" class="btn btn-sm btn-success">Xem</a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<div class="clearfix">
			{{$category->links()}}{{-- hiển thị các nút phan trang --}}
		</div>
	</div>
</div>@stop()