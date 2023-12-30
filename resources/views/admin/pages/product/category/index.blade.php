@extends('admin.layout.master')
@section('content')

<a href="{{route('category.create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a>
<div class="card card-fluid">
  <!-- .card-header -->
  <div class="card-header"> Manage Category </div><!-- /.card-header -->
  <!-- .card-body -->
  <div class="card-body">
    <!-- .table -->
    <table id="dataTables" class="table">
      <!-- thead -->
      <thead>
        <tr>
          <th> SN </th>
          <th> Product Type </th>
          <th> Product Brand </th>
          <th> Category Name </th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead><!-- /thead -->
      <tbody>
        @foreach($category as $categorys)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{$categorys->type->name}}</td>
          <td>{{$categorys->brand->name}}</td>
          <td>{{$categorys->name}}</td>
          <td>{{$categorys->status}}</td>
          <td class="centre" style="display:flex;">

            @if($categorys['status']=='on')
            <a href="{{ url('category/offStatus',$categorys->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

            @else($categorys['status']=='off')
            <a href="{{ url('category/onStatus',$categorys->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

            @endif
            &nbsp;
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewcategory{{$categorys->id}}"><i class="fas fa-eye"></i></button>
            &nbsp;
            <a href="{{ route('category.edit',$categorys->id) }}"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
            &nbsp;
            <form action="{{ route('category.destroy',$categorys->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>

        <div class="modal fade" id="viewcategory{{$categorys->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Displaying Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <div class="modal-body">

                <div class="form-group">
                  <label>Product Type</label><br>
                  {{$categorys->type->name}}
                </div>

                <hr>

                <div class="form-group">
                  <label>Category Name</label><br>
                  {{$categorys->name}}
                </div>

                
                <hr>


                <div class="form-group">
                  <label>Total category</label><br>
                  {{$categorys->count()}}
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