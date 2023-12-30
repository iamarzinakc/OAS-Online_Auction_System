@extends('admin.layout.master')
@section('content')
<h1>Welcome {{auth()->user()->name}} ,</h1>
            <div class="section-block">
                  <!-- metric row -->
                <div class="metric-row">
                  
                <div class="col-lg-3">
                      <div class="panel panel-primary">
                      <!-- .metric -->
                      <a href="{{asset('admin/product/type')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label text-primary"> Total Type </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fa fa-car fa-fw text-primary"></i></sub> <span class="value">
                            
                              {{$type}}
                            
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                  </div>

                  <div class="col-lg-3">
                      <div class="panel panel-primary">
                      <!-- .metric -->
                      <a href="{{asset('admin/product/brand')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label text-danger"> Total Brand </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fa fa-car fa-fw text-danger"></i></sub> <span class="value">
                            
                              {{$brand}}
                            
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                  </div>

                  <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('admin/product/category')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label text-success">Total Category </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fa fa-clock fa-fw text-success"></i></sub> <span class="value">
                          
                            {{$category}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('admin/product/product')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label text-warning">Total Product </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fas fa-gem text-warning"></i></sub> <span class="value">
                         
                            {{$product}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                   
                    <div class="col-lg-3">
                      <!-- .metric -->
                      <a href="{{asset('admin/user')}}" class="metric metric-bordered align-items-center">     
                        <h2 class="metric-label text-success">Total User </h2>                   
                        <p class="metric-value h3">
                          <sub><i class="fa fa-user text-success fa-fw"></i> </span></sub> <span class="value">
                          
                            {{$user}}
                          
                          </span>
                        </p>
                      </a> <!-- /.metric -->
                    </div><!-- /metric column -->
                    
@endsection 

