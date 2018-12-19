@extends('layouts\backend')
@section('title','Category List')
@section('backend')


<div class="container">
  <div class="row">
    <h1 class="text-center text-danger">Black Rose Admin</h1>
    <!-- ================================== -->
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">ADD</h3>
      </div>
      <div class="panel-body">
       <div class="col-md-4">
         <a href="{{route('bannerend')}}" class="btn btn-success
         " title="">Quay trở lại</a>
       </div>
       <hr>
       <div class="clearfix"></div>

       <form method="POST" enctype="multipart/form-data">

        <div class="form-group col-md-12">
          <label>Name:</label>
          <input class="form-control" type="text" name="name" placeholder="Name..." required value="{{old('name')}}">
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group col-md-6">
              <label>Price:</label>
              
              <input class="form-control" type="text" name="link" placeholder="Link ..." required value="{{old('link')}}">
            </div>
            <div class="form-group col-md-6">
              <label>Ordering:</label>
              
              <input class="form-control" type="text" name="ordering" placeholder="Ordering ..." required value="{{old('ordering ')}}">
            </div>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label>Link Images:</label>

          <input type="file" name="file_upload" placeholder="Link Images..." value="{{old('image')}}">
        </div>
        <div class="form-group col-md-12">
          <label>Status:</label>


          <label class="radio-inline">
            <input type="radio" name="status" value="0"> Active
          </label>
          <label class="radio-inline">
            <input type="radio" name="status" value="1"> No Active
          </label>
        </div>
          <input class="inp" type="hidden" name="_token" value="{{csrf_token()}}">

          {{-- <div class="button-box"> --}}
           <div class="col-md-4">

            <button type="submit" class="btn btn-warning">Thêm mới</button>


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
