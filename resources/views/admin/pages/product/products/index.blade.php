@extends('admin.layout.master')
@section('content')

<a href="{{route('product.create')}}"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button></a>
<div class="card card-fluid">
  <!-- .card-header -->
  <div class="card-header"> Manage Product </div><!-- /.card-header -->
  <!-- .card-body -->
  <div class="card-body">
    <!-- .table -->
    <table id="dataTables" class="table">
      <!-- thead -->
      <thead>
        <tr>
          <th> SN </th>
          <th> Image </th>
          <th> Product Type </th>
          <th> Brand </th>
          <th> Category </th>
          <th> Name </th>
          <th> Color </th>
          <th> Price </th>
          <th> Time </th>
          <th> Status </th>
          <th> Action </th>
        </tr>
      </thead><!-- /thead -->
      <tbody>
        @foreach($product as $products)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><img src="{{asset('public/image/product/'.$products->front_image)}}" alt="" height="50px"></td>
          <td>{{$products->type->name}}</td>
          <td>{{$products->brand->name}}</td>
          <td>{{$products->category->name}}</td>
          <td>{{$products->name}}</td>
          <td>{{$products->color}}</td>
          <td>{{$products->price}}</td>
          <td>{{$products->time}}</td>
          <td>{{$products->status}}</td>
          <td class="centre" style="display:flex;">

            @if($products['status']=='on')
            <a href="{{ url('product/offStatus',$products->id) }}"><button class="btn btn-warning btn-sm" type="reset">off</button></a>

            @else($products['status']=='off')
            <a href="{{ url('product/onStatus',$products->id) }}"><button class="btn btn-warning btn-sm" type="reset">on</button></a>

            @endif
            &nbsp;
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#viewproduct{{$products->id}}"><i class="fas fa-eye"></i></button>
            &nbsp;
            <a href="{{ route('product.edit',$products->id) }}"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
            &nbsp;
            <form action="{{ route('product.destroy',$products->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are You sure you want to logout?');"><i class="far fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>

        <div class="modal fade" id="viewproduct{{$products->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">

          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Displaying product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <div class="modal-body">

                <div class="form-group">
                  <label>product</label><br>
                  {{$products->code}}
                </div>

                <hr>

                <div class="form-group">
                  <label>product Name</label><br>
                  {{$products->name}}
                </div>

                <hr>

                <div class="form-group">
                  <label>Course</label><br>
                  {{$products->type->name}}
                </div>

                <hr>


                <div class="form-group">
                  <label>Total product</label><br>
                  {{$products->count()}}
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