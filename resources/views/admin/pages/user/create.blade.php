@extends('admin.layout.master')
@section('content')


<div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                          <label for="tf3">User Image</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" name="profile"> <label class="custom-file-label" for="tf3">Choose photo</label>
                          </div>
                        </div><!-- /.form-group -->


                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="control-label" for="select2-user_role">User Role:</label> 
                          <abbr title="Required">*</abbr>
                          <select id="select2-user_role" class="form-control" name="user_role_id" data-toggle="select2" data-placeholder="Select a User Role" data-allow-clear="true">
                            @foreach ($user_role as $user_roles)
                              <option value="{{$user_roles->id}}">{{$user_roles->role}}</option>
                            @endforeach
                          </select>
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">User Name</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter User Name" name="name">
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                          <label class="col-form-label" for="tfDefault">Address:</label> 
                          <abbr title="Required">*</abbr>
                          <input type="text" class="form-control" id="tfDefault" placeholder="Enter user address" name="per_address">
                        </div><!-- /.form-group -->
                        
                         <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label for="tf2">Phone No:</label>  <abbr title="Required">*</abbr>
                          <div class="custom-number">
                            <input type="number" class="form-control" placeholder="Enter phone no"  name="phone">
                          </div>
                        </div><!-- /.form-group -->                        
                        
                        <div class="col-md-6 mb-3">
                          <div class="form-label-group">
                            <label for="tf5">Email: </label>
                            <abbr title="Required">*</abbr>
                            <input type="email" class="form-control" id="fl1" placeholder="Email address" required="" name="email">
                            
                          </div>
                        </div><!-- /.form-group -->


                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                          <label class="d-flex justify-content-between" for="lbl5"><span>Password</span> <a href="#lbl5" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a></label> 
                          <input type="password" class="form-control"  id="lbl5" name="password">
                        </div><!-- /.form-group -->


                        <div class="col-md-12 mb-3">                            
                            <span>Is Active:</span> <!-- .switcher-control -->
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