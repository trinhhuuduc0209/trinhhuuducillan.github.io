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
            <li class="previous"><a href="{{route('cate_add')}}"  class="btn-danger" style="color: #00a65a;">Thêm mới</a></li>
        </ul>

      <form action="{{route('cat-del-all')}}" method="POST">
        <table class="table table-hover">
          <thead>
            <tr>
              <th><input type="checkbox" id="checked_all" value=""></th>
              <th>#ID</th>
              <th>Name</th>
              <th>Status</th>
              <th>Created At</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($cats as $cat)
            <tr>
             <td><input type="checkbox" class="item-check" name="id[]" value="{{$cat->id}}"></td>
             <td>{{$cat->id}}</td>
             <td>{{$cat->name}}</td>
             <td>
              @if($cat->status == 0)
              Active

              @else
              No Active
              @endif
            </td>
            <td>{{$cat->created_at}}</td>
            <td>
             <a href="{{route('category-del-end',['id'=>$cat->id])}}" title="get"  onclick="return confirm('Delete {{$cat->name}} ')" class="btn btn-xs btn-danger">Xóa</a>
             <a href="{{route('cate_edit',['id'=>$cat->id])}}" title="get" class="btn btn-xs btn-primary">Sửa</a>
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
   {{$cats->links()}}

 </div>
 <!-- ================================== -->
 <!-- ================================== -->
 <!-- ================================== -->
 <!-- ================================== -->
</div>

</div>


@stop()
            