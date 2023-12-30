@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <!-- .fieldset -->
                      <div class="row page-section">
                        <legend>User Manage</legend> <!-- .form-group -->
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
                         <div class="col-md-6 mb-3">
                          <label for="tf3"> User Image</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" name="profile"> <label class="custom-file-label" for="tf3">Choose file</label>
                            <img src="../../public/image/user/{{ $user->profile }}" height="50px" width="50px">
                          </div>
                        </div><!-- /.form-group -->                        


                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-user_role">User Role:</label> 
                          <select id="select2-user_role" class="form-control" name="user_role_id" data-toggle="select2" data-placeholder="Select a User Role" data-allow-clear="true">
                            @foreach ($user_role as $user_roles)
                              <option value="{{$user_roles->id}}">{{$user_roles->role}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">User Name</label> 
                          <input type="text" class="form-control" id="tfDefault" name="name" value="{{$user->name}}">
                        </div><!-- /.form-group -->
                      
                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Address:</label> 
                          <input type="text" class="form-control" id="tfDefault" name="per_address" value="{{$user->per_address}}">
                        </div><!-- /.form-group -->

                        
                         <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Phone No:</label>
                          <div class="custom-number">
                            <input type="number" class="form-control"  name="phone" value="{{$user->phone}}">
                          </div>
                        </div><!-- /.form-group -->
                        
                        
                        <div class="col-md-6 mb-3">
                          <div class="form-label-group">
                            <label for="tf5">Email</label>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="" name="email" value="{{$user->email}}">
                            
                          </div>
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