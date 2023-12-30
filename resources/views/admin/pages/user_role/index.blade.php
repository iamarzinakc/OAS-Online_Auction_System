@extends('admin.layout.master')
@section('content')

 <!-- /floating action -->
<div class="page-section">
                <!-- .card -->
            <div class="card card-fluid">
                  <!-- .card-header -->
                  <div class="card-header"> Manage User Role <a href="{{asset('admin/user_role/create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a></div><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .table -->
                    <table id="dataTables" class="table">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th> SN </th>
                          <th> Role </th>
                          <th> Status </th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->
                      <tbody>
                        @foreach ($user_role as $user_roles)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{$user_roles->role}}</td>
                          <td>{{$user_roles->status}}</td>
                          <td class="centre" style="display:flex;">
                          
                          @if($user_roles['status']=='on')                              
                              <a href="{{ url('user_role/offStatus',$user_roles->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

                                @else($user_roles['status']=='off') 
                                  <a href="{{ url('user_role/onStatus',$user_roles->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

                            @endif
                            &nbsp;
                             <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#showUserModel"><i class="fas fa-eye"></i></button>
                            &nbsp;
                            <a href="{{ route('user_role.edit',$user_roles->id) }}"><button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></button></a>  
                            &nbsp;
                            <form action="{{ route('user_role.destroy',$user_roles->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to Delete?');"><i class="far fa-trash-alt"></i></button>
                            </form>
                          </td>
                        </tr>
                        

                        <div class="modal fade" id="showUserModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Displaying User</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                
                                
                                <div class="modal-body">
                                  
                                  
                                  
                                  <div class="form-group">
                                    <label>User Role:</label><br>
                                    {{$user_roles->role}}
                                  </div>


                                  <hr>


                                <div class="form-group">
                                    <label>Total User Role:</label><br>
                                    {{$user_roles->count()}}
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                              </form>
                              </div>
                              </div>
                            </div>
                          </div>

                        @endforeach
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.card-body -->
              </div>
</div><!-- /.card -->
@endsection