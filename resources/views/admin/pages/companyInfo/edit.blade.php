@extends('admin.layout.master')
@section('content')


<div class="page-section">
  <div class="d-xl-none">
    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
  </div><!-- .card -->
  <div id="base-style" class="card">
    <!-- .card-body -->
    <div class="card-body">
      <!-- .form -->
      <form action="{{route('companyInfo.update',$company->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- .fieldset -->
        <div class="row">
          <legend> Company Information Manage </legend> <!-- .form-group -->
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
          <div class="col-md-7 mb-3">
            <label for="tf3"> Company Photo</label> <abbr title="Required">*</abbr>
            <div class="custom-file"> <abbr title="Required">*</abbr>
              <input type="file" class="custom-file-input" id="tf3" name="photo" value="{{$company->photo}}"><label class="custom-file-label" for="tf3">Choose file</label>
              <img src="../../backend/image/company/{{ $company->photo }}" height="50px" width="50px">
            </div>
          </div><!-- /.form-group -->

          <div class="col-md-6 mb-3">
            <label for="tf5">Email</label> <abbr title="Required">*</abbr>
            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="" name="email" value="{{$company->email}}">
          </div><!-- /.form-group -->

          <!-- .form-group -->
          <div class="col-md-6 mb-3">
            <label class="col-form-label" for="tfDefault">Company Name</label> <abbr title="Required">*</abbr>
            <input type="text" class="form-control" id="tfDefault" name="name" placeholder="Enter Company Name" value="{{$company->cname}}">
          </div><!-- /.form-group -->

          <!-- .form-group -->
          <div class="col-md-6 mb-3">
            <label class="col-form-label" for="tfDefault">Address:</label> <abbr title="Required">*</abbr>
            <input type="text" class="form-control" id="tfDefault" name="address" placeholder="Enter Company Address" value="{{$company->address}}">
          </div><!-- /.form-group -->



          <!-- .form-group -->
          <div class="col-md-6 mb-3">
            <label class="col-form-label" for="tfDefault">Pan No:</label> <abbr title="Required">*</abbr>
            <input type="text" class="form-control" id="tfDefault" name="pan" placeholder="Enter pan/ vat Number" value="{{$company->pan}}">
          </div><!-- /.form-group -->


          <!-- .form-group -->
          <div class="col-md-6 mb-3">
            <label for="tf2">Phone No:</label> <abbr title="Required">*</abbr>
            <div class="custom-number">
              <input type="number" class="form-control" name="phone" placeholder="Enter Company Phone Number" value="{{$company->phone}}">
            </div>
          </div><!-- /.form-group -->



        </div><!-- /.fieldset -->

        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Update</button>
          <button class="btn btn-danger" type="reset">Reset</button>
        </div>
      </form><!-- /.form -->
    </div><!-- /.card-body -->
    <!-- .card-body -->
  </div>
</div>


@endsection