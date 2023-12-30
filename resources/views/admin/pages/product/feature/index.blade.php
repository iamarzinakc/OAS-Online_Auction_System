@extends('admin.layout.master')
@section('content')

<a href="{{route('feature.create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a>
<div class="card card-fluid">
  <!-- .card-header -->
  <div class="card-header"> Manage Product Feature </div><!-- /.card-header -->
  <!-- .card-body -->
  <div class="card-body">
    <!-- .table -->
    <table id="dataTables" class="table">
      <!-- thead -->
      <thead>
        <tr>
          <th> SN </th>
          <th> Feature </th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead><!-- /thead -->
      <tbody>
        @foreach($feature as $features)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{$features->name}}</td>
          <td>{{$features->status}}</td>
          <td class="centre" style="display:flex;">

            @if($features['status']=='on')
            <a href="{{ url('feature/offStatus',$features->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

            @else($features['status']=='off')
            <a href="{{ url('feature/onStatus',$features->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

            @endif
            &nbsp;
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewfeature{{$features->id}}"><i class="fas fa-eye"></i></button>
            &nbsp;
            <a href="{{ route('feature.edit',$features->id) }}"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
            &nbsp;
            <form action="{{ route('feature.destroy',$features->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>

        <div class="modal fade" id="viewfeature{{$features->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Displaying Product features</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <div class="modal-body">

                
                <div class="form-group">
                  <label>Product feature </label><br>
                  {{$features->name}}
                </div>

                <hr>

                <div class="form-group">
                  <label>Status</label><br>
                  {{$features->status}}
                </div>

                <hr>


                <div class="form-group">
                  <label>Total feature</label><br>
                  {{$features->count()}}
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