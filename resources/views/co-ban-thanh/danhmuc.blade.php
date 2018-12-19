@extends('layouts.main')
@section('content')
<table class="table table-bordered  ">
	<thead>
		<tr>
			<th>stt</th>
			<th>ten</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($sp as $sp)

		<tr>
			<td>{{$sp->id}}</td>
			<td>{{$sp->name}}</td>
		</tr>
		@endforeach
	</tbody>
</table>


@stop