@extends('admin.layout.master')
@section('content')


<div class="page-section">
  <div id="base-style" class="card">
    <!-- .card-body -->
    <!-- .form -->
    <form action="{{route('brand.store')}}" method="POST">
      @csrf
      <!-- .fieldset -->
      <div class="row page-section">
        <legend>Brand Manage</legend> <!-- .form-group -->
        <div class="col-md-12 mb-3">
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
          <abbr title="Required">*</abbr>
          <select id="select2-single" class="form-control" data-toggle="select2" name="type_id" data-placeholder="Select a Product Type" data-allow-clear="true">
            @foreach ($type as $types)
            <option value="{{$types->id}}">{{$types->name}}</option>
            @endforeach
          </select>
        </div><!-- /.form-group -->

        <!-- .form-group -->
        <div class="col-md-6 mb-3">
          <label class="col-form-label" for="tfDefault">Brand Name</label>
          <abbr title="Required">*</abbr>
          <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Brand Name">
        </div><!-- /.form-group -->

        <div class="col-md-12 mb-3">
          <span>Is Active:</span>
          <label class="switcher-control switcher-control-lg"><input type="checkbox" class="switcher-input" name="status" checked> <span class="switcher-indicator"></span> <span class="switcher-label-on">ON</span> <span class="switcher-label-off">OFF</span></label>
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