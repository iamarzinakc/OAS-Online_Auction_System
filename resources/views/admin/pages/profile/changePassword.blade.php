@extends('admin.layout.master')
@section('content')


    <div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
                </div><!-- .card -->
                <div id="base-style" class="card">
                  <!-- .card-body -->
                    <!-- .form -->
                    <form role="form" action="{{url('profile/changePasswordProcess', auth()->user()->id)}}" method = "POST">
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
                            <label class="d-flex justify-content-between" for="lbl5">
                                <span>Old Password</span>
                                 <a href="#lbl5" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a>
                            </label>
                             <input type="password" class="form-control"  id="lbl5" name="oldPassword" placeholder="Enter Old Password" required>
                        </div><!-- /.form-group -->


                        <!-- .form-group -->
                        <div class="col-md-6 mb-3">
                        <label class="d-flex justify-content-between" for="lbl4"><span>New Password</span> <a href="#lbl4" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a></label>
                         <input type="password" class="form-control"  id="lbl4" name="newPassword" placeholder="Enter New Password" required>
                        </div><!-- /.form-group -->

                         <!-- .form-group -->
                         <div class="col-md-6 mb-3">
                         <label class="d-flex justify-content-between" for="lbl6"><span>Conform Password</span> <a href="#lbl6" data-toggle="password"><i class="fa fa-eye fa-fw"></i> <span>Show</span></a></label>
                          <input type="password" class="form-control"  id="lbl6" name="confPassword" placeholder="Conform Your Password" required>
                        </div><!-- /.form-group -->

                         
                    </form><!-- /.form -->
                 
                </div>
    </div>


@endsection 