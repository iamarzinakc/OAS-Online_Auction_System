@extends('admin.layout.master')
@section('content')


<div class="page-section">
  <div class="d-xl-none">
    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
  </div><!-- .card -->
  <div id="base-style" class="card">
    <!-- .card-body -->
    <!-- .form -->
    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <!-- .fieldset -->
      <div class="row page-section">
        <legend>Product Manage</legend> <!-- .form-group -->
        <div class="col-md-10 mb-3">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>

        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label class="control-label" for="select2-type">Select Product Types </label>
          <abbr title="Required">*</abbr>
          <select id="select2-type" class="form-control" data-toggle="select2" name="type_id" data-placeholder="Select a  Product Type" data-allow-clear="true">
            @foreach ($type as $types)
            <option value="{{$types->id}}">{{$types->name}}</option>
            @endforeach
          </select>
        </div><!-- /.form-group -->


        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label class="control-label" for="select2-brand">Brand:</label>
          <abbr title="Required">*</abbr>
          <select id="select2-brand" class="form-control" data-toggle="select2" name="brand_id" data-placeholder="Select a Brand" data-allow-clear="true">
            @foreach ($brand as $brands)
            <option value="{{$brands->id}}">{{$brands->name}}</option>
            @endforeach
          </select>
        </div><!-- /.form-group -->


        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label class="control-label" for="select2-category">Category:</label>
          <abbr title="Required">*</abbr>
          <select id="select2-category" class="form-control" data-toggle="select2" name="category_id" data-placeholder="Select a Category" data-allow-clear="true">
            @foreach ($category as $categorys)
            <option value="{{$categorys->id}}">{{$categorys->name}}</option>
            @endforeach
          </select>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label class="control-label" for="select2-feature">Feature:</label>
          <abbr title="Required">*</abbr>
          <select id="select2-feature" class="form-control" data-toggle="select2" name="feature_id" data-placeholder="Select a Feature" data-allow-clear="true">
            @foreach ($feature as $features)
            <option value="{{$features->id}}">{{$features->name}}</option>
            @endforeach
          </select>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label for="tf3">Products Front Photo</label>
          <abbr title="Required">*</abbr>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="tf3" name="front_image"><label class="custom-file-label" for="tf3">Choose file</label>
            <img src="../../../public/image/product/{{ $product->front_image }}" height="50px" width="50px">
          </div>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label for="tf3">Products Back Photo</label>
          <abbr title="Required">*</abbr>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="tf3" name="back_image"><label class="custom-file-label" for="tf3">Choose file</label>
            <img src="../../../public/image/product/{{ $product->front_image }}" height="50px" width="50px">
          </div>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label for="tf3">Products Left Photo</label>
          <abbr title="Required">*</abbr>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="tf3" name="left_image"><label class="custom-file-label" for="tf3">Choose file</label>
            <img src="../../../public/image/product/{{ $product->front_image }}" height="50px" width="50px">
          </div>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label for="tf3">Products Right Photo</label>
          <abbr title="Required">*</abbr>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="tf3" name="right_image"><label class="custom-file-label" for="tf3">Choose file</label>
            <img src="../../../public/image/product/{{ $product->front_image }}" height="50px" width="50px">
          </div>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-4 mb-3">
          <label for="tf2">Product Name</label> <abbr title="Required">*</abbr>
          <input type="text" class="form-control" value="{{$product->name}}" name="name" placeholder="Enter Product Name">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-4 mb-3">
          <label for="tf2"> Modle Number</label> <abbr title="Required">*</abbr>
          <input type="number" class="form-control" value="{{$product->model_no}}" name="model_no" placeholder="Enter Product Modle No">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-4 mb-3">
          <label class="control-label" for="select2-single">Product Condition</label><abbr title="Required">*</abbr>
          <select class="custom-select" id="selDefault" value="{{$product->condition}}" placeholder="Enter Product Condition" name="condition">
            <option value=""></option>
            <option value="Fresh">Fresh</option>
            <option value="First Hand">Firsh Hand</option>
            <option value="Second Hand">Second Hand</option>
          </select>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label class="col-form-label" for="tfDefault">Buy Year</label>
          <abbr title="Required">*</abbr>
          <input type="date" class="form-control" id="tfDefault" value="{{$product->buy_year}}" name="buy_year">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label for="tf2">Product Color</label> <abbr title="Required">*</abbr>
          <input type="text" class="form-control" name="color" value="{{$product->color}}" placeholder="Enter Product Color">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label for="tf2">Price</label> <abbr title="Required">*</abbr>
          <div class="custom-number">
            <input type="number" class="form-control" name="price" value="{{$product->price}}" placeholder="Enter Price">
          </div>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-3 mb-3">
          <label class="col-form-label" for="tfDefault">Time</label>
          <abbr title="Required">*</abbr>
          <input type="datetime-local" class="form-control" id="tfDefault" value="{{$product->time}}" name="time">
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-12 mb-3">
          <label for="tf6">Description</label>
          <abbr title="Required">*</abbr>
          <textarea class="form-control" id="tf6" rows="4" name="description" placeholder="Electrical Product Description">{{$product->description}}</textarea>
        </div><!-- /.form-group -->

      </div><!-- /.fieldset -->
      <div class="form-actions">
        <button class="btn btn-primary" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
      </div>
  </div>
  </form><!-- /.form -->

</div>
</div>


@endsection