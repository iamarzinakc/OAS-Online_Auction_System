@extends('admin.layout.master')
@section('content')

<a href="{{route('brand.create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a>
<div class="card card-fluid">
  <!-- .card-header -->
  <div class="card-header"> Manage Brand </div><!-- /.card-header -->
  <!-- .card-body -->
  <div class="card-body">
    <!-- .table -->
    <table id="dataTables" class="table">
      <!-- thead -->
      <thead>
        <tr>
          <th> SN </th>
          <th> Product Type </th>
          <th> Brand Name </th>
          <th> Status </th>
          <th> Action </th>
        </tr>
      </thead><!-- /thead -->
      <tbody>
        @foreach($brand as $brands)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{$brands->type->name}}</td>
          <td>{{$brands->name}}</td>
          <td>{{$brands->status}}</td>
          <td class="centre" style="display:flex;">

            @if($brands['status']=='on')
            <a href="{{ url('brand/offStatus',$brands->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

            @else($brands['status']=='off')
            <a href="{{ url('brand/onStatus',$brands->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

            @endif
            &nbsp;
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewbrand{{$brands->id}}"><i class="fas fa-eye"></i></button>
            &nbsp;
            <a href="{{ route('brand.edit',$brands->id) }}"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
            &nbsp;
            <form action="{{ route('brand.destroy',$brands->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>

        <div class="modal fade" id="viewbrand{{$brands->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Displaying brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <div class="modal-body">



                <div class="form-group">
                  <label>brand Name</label><br>
                  {{$brands->name}}
                </div>

                <hr>

                <div class="form-group">
                  <label>Product Type</label><br>
                  {{$brands->type->name}}
                </div>

                <hr>


                <div class="form-group">
                  <label>Total brand</label><br>
                  {{$brands->count()}}
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