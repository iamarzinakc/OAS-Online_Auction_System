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
                    <form action="{{route('profile.update',$user->id)}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <fieldset>
                        <legend> User Profile </legend> <!-- .form-group -->
                        
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf3"> Image</label>
                          <div class="custom-file">                            
                            <label class="custom-file-label" for="tf3">Photo</label>
                            <input type="file" class="custom-file-input" id="tf3" name="photo">
                            <img src="../../public/image/user/{{ $user->photo }}" height="50px" width="50px">
                          </div>
                        </div><!-- /.form-group -->                        

                        <div class="form-group">
                          <div class="form-label-group">
                            <label for="tf5">Email</label>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="" name="email" value="{{$user->email}}">
                            
                          </div>
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Student Name</label> 
                          <input type="text" class="form-control" id="tfDefault" name="name" value="{{$user->name}}">
                        </div><!-- /.form-group -->
                      
                         <!-- .form-group -->
                         <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Address:</label> 
                          <input type="text" class="form-control" id="tfDefault" name="address" value="{{$user->address}}">
                        </div><!-- /.form-group -->

                        
                         <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf2">Phone No:</label>
                          <div class="custom-number">
                            <input type="number" class="form-control"  name="phone" value="{{$user->phone}}">
                          </div>
                        </div><!-- /.form-group -->
                        
                        

                      </fieldset><!-- /.fieldset -->

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