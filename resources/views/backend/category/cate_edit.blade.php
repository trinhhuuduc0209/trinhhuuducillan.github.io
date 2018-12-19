@extends('layouts\backend')
@section('title','Category List')
@section('backend')


<div class="container">
  <div class="row">
    <h1 class="text-center text-danger">Black Rose Admin</h1>
    <!-- ================================== -->
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Thêm Mới Sản Phẩm</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-4">
           <a href="{{route('categoryend')}}" class="btn btn-success
            " title="">Quay trở lại</a>
         </div>
         <hr>
          <div class="clearfix"></div>
        <form method="POST">

          <div class="form-group col-md-4">
            <input class="form-control" type="text" name="name" placeholder="Name..." value="{{$model->name}}">
          </div>
          @if($model->status == 0)
          <label class="radio-inline">
            <input type="radio" name="status" value="0" checked> Active
          </label>
          <label class="radio-inline">
            <input type="radio" name="status" value="1"> No Active
          </label>
          @else
          <label class="radio-inline">
            <input type="radio" name="status" value="0"> Active
          </label>
          <label class="radio-inline">
            <input type="radio" name="status" value="1" checked> No Active
          </label>
          @endif
          {{-- @if($errors->has('name'))
          <div class="help-block">
            {!! $errors->first('name') !!}
          </div>
          @endif --}}

          <input class="inp" type="hidden" name="_token" value="{{csrf_token()}}">
         <hr>
          <div class="clearfix"></div>

          {{-- <div class="button-box"> --}}
          <div class="form-group col-md-4">
            
            <button type="submit" class="btn btn-danger">Thêm mới</button>
          </div>
        </form>
      </div>
 </div>
 <!-- ================================== -->
 <!-- ================================== -->
 <!-- ================================== -->
 <!-- ================================== -->
</div>

</div>


@stop()