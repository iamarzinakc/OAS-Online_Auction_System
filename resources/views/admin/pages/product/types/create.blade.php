@extends('admin.layout.master')
@section('content')


<div class="page-section">
  <div id="base-style" class="card">
    <!-- .card-body -->
    <!-- .form -->
    <form action="{{route('type.store')}}" method="POST">
      @csrf
      <!-- .fieldset -->
      <div class="row page-section">
        <legend>Product Type Manage</legend> <!-- .form-group -->
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
          <label class="col-form-label" for="tfDefault">Product Type</label>
          <abbr title="Required">*</abbr>
          <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Product Name">
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