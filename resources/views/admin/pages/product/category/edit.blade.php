@extends('admin.layout.master')
@section('content')


<div class="page-section">
  <div class="d-xl-none">
    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
  </div><!-- .card -->
  <div id="base-style" class="card">
    <!-- .card-body -->
      <!-- .form -->
      <form action="{{route('category.update',$category->id)}}" method="POST">
        @csrf
        @method('PUT')
        <!-- .fieldset -->
        <div class="row page-section">
          <legend>Category Manage</legend> <!-- .form-group -->
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
          <div class="col-md-6 mb-3">
            <label class="control-label" for="select2-single">Product Type:</label>
            <select id="select2-single" class="form-control" name="type_id" data-toggle="select2" data-placeholder="Select a Product Type" data-allow-clear="true">
              @foreach ($type as $types)
              <option value="{{$types->id}}">{{$types->name}}</option>
              @endforeach
            </select>
          </div><!-- /.form-group -->

          <!-- .form-group -->
          <div class="col-md-6 mb-3">
            <label class="control-label" for="select2-brand">Product Brand:</label>
            <select id="select2-brand" class="form-control" name="brand_id" data-toggle="select2" data-placeholder="Select a Product Brand" data-allow-clear="true">
              @foreach ($brand as $brands)
              <option value="{{$brands->id}}">{{$brands->name}}</option>
              @endforeach
            </select>
          </div><!-- /.form-group -->

          <!-- .form-group -->
          <div class="col-md-6 mb-3">
            <label class="col-form-label" for="tfDefault">Category Name</label>
            <input type="text" class="form-control" id="tfDefault" name="name" value="{{$category->name}}" placeholder="Enter Category Name">
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