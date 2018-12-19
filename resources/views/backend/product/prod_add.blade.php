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
         <a href="{{route('productend')}}" class="btn btn-success
         " title="">Quay trở lại</a>
       </div>
       <hr>
       <div class="clearfix"></div>

       <form method="POST" enctype="multipart/form-data">

        <div class="form-group col-md-6">
          <label>Name:</label>
          <input class="form-control" type="text"  id="name" name="name" placeholder="Name..." required value="{{old('name')}}">
        </div>

        <div class="form-group col-md-6">
          <label>Slug:</label>
          <input class="form-control" type="text" id="slug" name="slug" placeholder="Slug..." required value="{{old('slug')}}">
        </div>


        <div class="form-group col-md-6">
          <label>Category Id:</label>

          <select name="category_id" id="input" class="form-control" required="required">
            <option  readonly>Category Id...</option>
            <hr><br> 

            @foreach($cats as $cat)
            <option value="{{$cat->id}}" >{{$cat->name}}</option>
            @endforeach

          </select>
        </div>
        <div class="form-group col-md-3">
          <label>Images:</label>

          <input type="file" name="file_upload" placeholder="Images..." value="{{old('image')}}">
        </div>
        <div class="form-group col-md-3">
          <label>Other Images:</label>

          <input type="file" name="other_image[]" multiple placeholder="Images..." value="{{old('image')}}">
        </div>
        <br>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <label>Price:</label>
              <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="tel" name="price" class="form-control" placeholder="Price ..." required value="{{old('price')}}.đ" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-addon">.00</span>
              </div>
            </div>
            
            <div class="col-md-6">
              <label>Sale Price:</label>
              <div class="input-group">
                <span class="input-group-addon">$</span>
                <input class="form-control" type="tel" name="sale_price" placeholder="Sale Price ..." value="{{old('sale_price')}}.đ" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-addon">.00</span>
              </div>
            </div>
          </div>
        </div>


        <div class="form-group col-md-12">
          <div class="row">
            
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <label>Status:</label>
              
              
              <label class="radio-inline">
                <input type="radio" name="status" value="0"> Active
              </label>
              <label class="radio-inline">
                <input type="radio" name="status" value="1"> No Active
              </label>
            </div>


            <div class="col-md-4">
              <label>Color:</label>
              @foreach($colors as $clo)
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="color[]" value="{{$clo->id}}">{{$clo->name}}
                </label>
              </div>
              @endforeach
            </div>
            
            <div class="col-md-4">
              <label>Color:</label>
              @foreach($sizes as $sz)
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="size[]" value="{{$sz->id}}">{{$sz->name}}
                </label>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="form-group col-md-12">
          <label>Description:</label>
          <textarea name="description" id="content" class="form-control" rows="3" required >{{old('description')}}</textarea>
        </div>
        <br>


          {{-- @if($errors->has('name'))
          <div class="help-block">
            {!! $errors->first('name') !!}
          </div>
          @endif --}}
          <div class="clearfix"></div>
          <hr>
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
