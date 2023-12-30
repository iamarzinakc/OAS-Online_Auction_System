@extends('admin.layout.master')
@section('content')

<!-- .page-cover -->
<div class="page-cover">
              <div class="text-center">
                @foreach( $company as $companys)
                <div class="user-avatar user-avatar-xl"><img src="{{asset('backend/image/company/'.$companys->image)}}" alt="" height="100px"></div><br>
                
                <h2 class="h4 mt-2 mb-0"> {{$companys->name}}</h2><hr>
                <p class="text-muted">Email Us: {{$companys->email}}</p>
                <p class="text-muted">Address: {{$companys->address}}</p>
                <p class="text-muted">Pan No: {{$companys->pan_vat_no}}</p>
                <p class="text-muted">Phone No: {{$companys->phone_no}}</p>
                <p class="text-muted">Mobile No: {{$companys->mobile_no}}</p>
                <p class="text-muted">Support No: {{$companys->support_no}}</p>
                <div class="text-center"><a href="{{ route('companyInfo.edit', $companys->id) }}"><button class="btn btn-primary " >Edit</button></a> </div>
                @endforeach
              </div><!-- .cover-controls -->
</div><!-- /.page-cover -->
            <!-- Followers Modal -->
           
@endsection 