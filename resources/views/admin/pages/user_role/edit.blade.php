@extends('admin.layout.master')
@section('content')


<div class="page-section">
  <div class="d-xl-none">
    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
  </div><!-- .card -->
  <div id="base-style" class="card">
    <!-- .card-body -->
    <!-- .form -->
    <form action="{{route('user_role.update',$user_role->id)}}" method="POST">
      @csrf
      @method('PUT')

      <!-- .fieldset -->
      <div class="row page-section">
        <legend>User Role Manage</legend> <!-- .form-group -->
        <div class="col-md-8 mb-3">
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
        <div class="col-md-12 mb-3">
          <label class="col-form-label" for="tfDefault">User Role</label>
          <input type="text" class="form-control" id="tfDefault" name="role" value="{{$user_role->role}}">
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