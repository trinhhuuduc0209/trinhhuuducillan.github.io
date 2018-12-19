@extends('layouts.main')
@section('content')
<table class="table table-bordered  ">
	<thead>
		<tr>
			<th>stt</th>
			<th>ten</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach ($hocsinh as $hs)

		<tr>
			<td>{{$hs->id}}</td>
			<td>{{$hs->name}}</td>
			<td><a href="{{route('xoasp',['id' => $hs->id])}}"> xoa</a></td>

		</tr>
		@endforeach
	</tbody>
</table>



@stop