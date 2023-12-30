@extends('admin.layout.master')
@section('content')

<a href="{{route('type.create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a>
<div class="card card-fluid">
  <!-- .card-header -->
  <div class="card-header"> Manage Product Type </div><!-- /.card-header -->
  <!-- .card-body -->
  <div class="card-body">
    <!-- .table -->
    <table id="dataTables" class="table">
      <!-- thead -->
      <thead>
        <tr>
          <th> SN </th>
          <th> Product Type </th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead><!-- /thead -->
      <tbody>
        @foreach($type as $types)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{$types->name}}</td>
          <td>{{$types->status}}</td>
          <td class="centre" style="display:flex;">

            @if($types['status']=='on')
            <a href="{{ url('type/offStatus',$types->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

            @else($types['status']=='off')
            <a href="{{ url('type/onStatus',$types->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

            @endif
            &nbsp;
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewtype{{$types->id}}"><i class="fas fa-eye"></i></button>
            &nbsp;
            <a href="{{ route('type.edit',$types->id) }}"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
            &nbsp;
            <form action="{{ route('type.destroy',$types->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>

        <div class="modal fade" id="viewtype{{$types->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Displaying Product Types</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <div class="modal-body">

                
                <div class="form-group">
                  <label>Product Type </label><br>
                  {{$types->name}}
                </div>

                <hr>

                <div class="form-group">
                  <label>Status</label><br>
                  {{$types->status}}
                </div>

                <hr>


                <div class="form-group">
                  <label>Total type</label><br>
                  {{$types->count()}}
                </div>

                <hr>
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
</div><!-- /.card -->
@endsection