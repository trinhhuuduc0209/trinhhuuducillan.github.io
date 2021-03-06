@extends('layouts\backend')
@section('title','Category List')
@section('backend')


<div class="container">
  <div class="row">
    <h1 class="text-center text-danger">Black Rose Admin</h1>
    <!-- ================================== -->
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Danh Mục Sản Phẩm</h3>
      </div>
      <div class="panel-body">
        <ul class="pager">
          <li class="previous"><a href="{{route('prod_add')}}"  class="btn-danger" style="color: #00a65a;">Thêm mới</a></li>
        </ul>
        <form action="{{route('pro-del-all')}}" method="POST">
          <table class="table table-bordered table-hover table-striped" cellpadding="10px" cellspacing="10px">
            <thead>
              <tr class="info">
                <th ><input type="checkbox" id="checked_all" value=""></th>
                <th>#ID</th>
                <th>IMG</th>
                <th>Name</th>
                <th>Category Id</th>
                <th>Status</th>
                <th>Created At</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($prods as $k => $pro)
              <tr>
               <td><input type="checkbox" class="item-check" name="id[]" value="{{$pro->id}}"></td>
               <td>{{$k+1}}</td>

               <td><img src="{{url('public')}}/assets/img/product/{{$pro->image}}" width="50px" height="50px" class="img-circle" alt=""></td>
               <td>{{$pro->name}}</td>
               <td>{{$pro->cates->name}}</td>
               <td>
                @if($pro->status == 0)
                Active

                @else
                No Active
                @endif
              </td>
              <td>{{$pro->created_at}}</td>
              <td>
               <a href="{{route('product-del-end',['id'=>$pro->id])}}" title="get"  onclick="return confirm('Delete {{$pro->name}} ')" class="btn btn-xs btn-danger">Xóa</a>
               <a href="{{route('prod_edit',['id'=>$pro->id])}}" title="get" class="btn btn-xs btn-success">Sửa</a>
             </td>
           </tr>
           @endforeach
         </tbody>


       </table>
       {{csrf_field()}}
       <tfoot>
        <input type="submit" class="btn btn-sm btn-danger" value="Delete" onclick="return confirm('Bạn có chắc không! ')">
      </tfoot>
    </form>
  </div>

  <div class="clearfix"></div>
  {{$prods->links()}}

</div>

<!-- ================================== -->
<!-- ================================== -->
<!-- ================================== -->
<!-- ================================== -->
</div>

</div>


@stop()