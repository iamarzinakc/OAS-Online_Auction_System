@extends('admin.layout.master')
@section('content')

<!-- .page-cover -->
<header class="page-cover">
              <div class="text-center">
                <div class="user-avatar user-avatar-xl">
                @if(auth()->user()->photo !== "")
                  @if (file_exists('public/image/user/'.auth()->user()->photo))
                  <img src="{{asset('public/image/user/'.auth()->user()->photo)}}" alt=""> 
                  @else
                  <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" alt="">
                  @endif
                  @else
                  <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" alt="">
                  @endif
                </div>
                <h2 class="h4 mt-2 mb-0"> {{auth()->user()->name}}</h2><hr>
                
                <p class="text-muted"> {{auth()->user()->user_role->role}}</p>
                <p class="text-muted">{{auth()->user()->address}}</p>
                <p class="text-muted">{{auth()->user()->phone}}</p>
                <p class="text-muted">{{auth()->user()->email}}</p>
              </div><!-- .cover-controls -->
            <div class="text-center"><a href="{{route('profile.edit',auth()->user()->id)}}"> <button class="btn btn-primary">Edit</button></a></div>
            </header><!-- /.page-cover -->

@endsection 