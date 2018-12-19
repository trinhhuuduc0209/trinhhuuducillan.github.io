@extends('layouts\backend')
@section('title','Category List')
@section('backend')


<div class="container">
  <div class="row">

    <h1 class="text-center text-danger">Black Rose Admin</h1>

    <!-- ================================== -->
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Edit</h3>
      </div>
      <div class="panel-body">


        @if(Session::has('delee'))
        <div class="alert alert-success" id="success-alert" role="alert">
          <a href="#" class="alert-link"><strong>{!! Session::get('delee') !!}</strong> </a>.
        </div>
        @endif

        
        <div class="col-md-4">
         <a href="{{route('productend')}}" class="btn btn-success
         " title="">Quay trở lại</a>
       </div>
       <hr>
       <div class="clearfix"></div>

       <form method="POST" enctype="multipart/form-data">
        {{-- 'id','name','category_id','parent','status', --}}
        <div class="form-group col-md-6">
          <label>Name:</label>
          <input class="form-control" type="text" id="name" name="name" placeholder="Name..." value="{{$model->name}}">
        </div>
        <div class="form-group col-md-6">
          <label>Slug:</label>
          <input class="form-control" type="text" id="slug" name="slug" placeholder="Slug..." required value="{{$model->slug}}">
        </div>


        <div class="form-group col-md-4">
          <label>Category Id:</label>
          <select name="category_id" id="input" class="form-control" required="required">
            <option readonly disabled>Category Id...</option>
            <hr><br> 

            @foreach($cats as $cat)
            <?php
            $selected = $model->category_id == $cat->id ? 'selected' : '';
            ?>
            <option value="{{$cat->id}}" {{$selected}} >{{$cat->name}}</option>
            @endforeach

          </select>
        </div>

        <div class="form-group col-md-5">
          <label>Ảnh sản phẩm:</label>
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="#" class="thumbnail">
              <img src="{{url('public')}}/assets/img/product/{{$model->image}}" alt="">
            </a>
          </div>
          <input type="file" name="file_upload" placeholder="{{$model->image}}" value="{{$model->image}}">
        </div>

        <div class="form-group col-md-3">
          <label>Ảnh khác:</label>
          <input type="file" name="other_img[]" multiple>
        </div>

        @if($model->pro_img->count())
        <div class="form-group col-md-12">
          <div>
            <label>Old Images:</label>
          </div>
          @foreach($model->pro_img as $img)
          <div class="col-xs-3">
            <div class="product-wrapper mb-30">
              <div class="product-img">
                <caption>
                  <input type="file" name="old_img[{{$img->id}}]" value="" placeholder="">
                </caption>
                <hr>
                <a href="{{route('prod-del-img',['id'=>$img->id])}}" onclick="return confirm('Delete {{$img->id}} ')">
                  <img src="{{url('public')}}/assets/img/product/{{$img->link_img}}" alt="">
                </a>
                <div class="product-action">
                  <a class="action-heart" title="Xóa" href="{{route('prod-del-img',['id'=>$img->id])}}" onclick="return confirm('Delete {{$img->id}} ')">
                    <i class="ion-android-delete"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @endif



        <div class="row">
          <div class="col-md-12">
            <div class="form-group col-md-6">
              <label>Price:</label>
              <div class="input-group">
                <span class="input-group-addon">$</span>
                <input class="form-control" type="number" name="price" placeholder="Price ..." required value="{{$model->price}}" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-addon">.00</span>
              </div>

            </div>

            <div class="form-group col-md-6">
              <label>Sale Price:</label>
              <div class="input-group">
                <span class="input-group-addon">$</span>
                <input class="form-control" type="number" name="sale_price" placeholder="Sale Price ..." required value="{{$model->sale_price}}.đ" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-addon">.00</span>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="form-group col-md-4">
              <label>Trạng thái:</label>
              @if($model->status == 0)
              <label class="radio-inline">
                <input type="radio" name="status" value="0" checked> Hiển thị
              </label>
              <label class="radio-inline">
                <input type="radio" name="status" value="1"> Ẩn
              </label>
              @else
              <label class="radio-inline">
                <input type="radio" name="status" value="0"> Hiển thị
              </label>
              <label class="radio-inline">
                <input type="radio" name="status" value="1" checked> Ẩn
              </label>
              @endif
            </div>

              <div class="col-md-4">
                <label>Màu sắc:</label>
                @foreach($colors as $clo)
                <?php 
                  $checked = in_array($clo->id, $atrarrys) ? 'checked' : '';
                ?>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="color[]" {{$checked}} value="{{$clo->id}}">{{$clo->name}}
                  </label>
                </div>
                @endforeach
              </div>

              <div class="col-md-4">
                <label>Kích thước:</label>
                @foreach($sizes as $sz)
                 <?php 
                  $checked1 = in_array($sz->id, $atrarrys) ? 'checked' : '';
                ?>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="size[]" {{$checked1}} value="{{$sz->id}}">{{$sz->name}}
                  </label>
                </div>
                @endforeach
              </div>
            </div>
          </div>  

          <div class="form-group col-md-12">
            <label>Description:</label>
            <textarea name="description" id="content" class="form-control" rows="3" value="{{$model->description}}" required>{{$model->description}}</textarea>
          </div>
          <input class="inp" type="hidden" name="_token" value="{{csrf_token()}}">

          {{-- <div class="button-box"> --}}
            <div class="clearfix">

            </div>
            <div class="col-md-4">

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

