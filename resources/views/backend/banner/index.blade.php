@extends('layouts\backend')
@section('title','Category List')
@section('backend')


<div class="container">
  <div class="row">
    <h1 class="text-center text-danger">Black Rose Admin</h1>
    <!-- ================================== -->
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Danh Mục Sản Phẩm</h3>
      </div>
      <div class="panel-body">
        <ul class="pager">
            <li class="previous"><a href="{{route('bane_add')}}"  class="btn-danger" style="color: #00a65a;">Thêm mới</a></li>
        </ul>
      <form action="{{route('ban-del-all')}}" method="POST">
        <table class="table table-hover">
          <thead>
            <tr>
              <th><input type="checkbox" id="checked_all" value=""></th>
              <th>#ID</th>
              <th>Name</th>
              <th>Link_images</th>
              <th>Link</th>
              <th>Ordering </th>
              <th>Status</th>
              <th>Created At</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($bans as $ban)
            <tr>
             <td><input type="checkbox" class="item-check" name="id[]" value="{{$ban->id}}"></td>
             <td>{{$ban->id}}</td>
             <td>{{$ban->name}}</td>
             <td><img src="{{url('public')}}/assets/img/product/{{$ban->link_images}}" width="50px" height="50px" class="img-circle" alt=""></td>
             <td>{{$ban->link}}</td>
             <td>{{$ban->ordering}}</td>
             <td>
              @if($ban->status == 0)
              Active

              @else
              No Active
              @endif
            </td>
            <td>{{$ban->created_at}}</td>
            <td>
             <a href="{{route('banner-del-end',['id'=>$ban->id])}}" title="get"  onclick="return confirm('Delete {{$ban->name}} ')" class="btn btn-xs btn-danger">Xóa</a>
             <a href="{{route('bane_edit',['id'=>$ban->id])}}" title="get" class="btn btn-xs btn-primary">Sửa</a>
           </td>
         </tr>
         @endforeach
       </tbody>
     </table>
     <tfoot>
          <input type="submit" class="btn btn-sm btn-danger" value="Delete" onclick="return confirm('Bạn có chắc không! ')">
     </tfoot>
     {{csrf_field()}}
   </form>
      </div>

   <div class="clearfix"></div>
   {{$bans->links()}}

 </div>
 <!-- ================================== -->
 <!-- ================================== -->
 <!-- ================================== -->
 <!-- ================================== -->
</div>

</div>


@stop()