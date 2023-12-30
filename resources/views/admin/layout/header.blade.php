<!-- .app-header -->
<header class="app-header app-header-dark">
  <!-- .top-bar -->
  <div class="top-bar">
    <!-- .top-bar-brand -->
    <div class="top-bar-brand">
      <!-- toggle aside menu -->
      <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
      <a href="{{url('admin/')}}"><img src="{{asset('backend/assets/images/logo/logo-auction.png')}}" alt="logo"></a>
    </div><!-- /.top-bar-brand -->
    <!-- .top-bar-list -->
    <div class="top-bar-list">
      <!-- .top-bar-item -->
      <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
        <!-- toggle menu -->
        <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
      </div><!-- /.top-bar-item -->
      <!-- .top-bar-item -->
      <div class="top-bar-item top-bar-item-full">
        <!-- .top-bar-search -->
        <form class="top-bar-search">
          <!-- .input-group -->
          <div class="input-group input-group-search dropdown">
            <div class="input-group-prepend">
              <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
            </div><input type="text" class="form-control" data-toggle="dropdown" aria-label="Search" placeholder="Search"> <!-- .dropdown-menu -->

          </div><!-- /.input-group -->
        </form><!-- /.top-bar-search -->
      </div><!-- /.top-bar-item -->
      <!-- .top-bar-item -->
      <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
        <!-- .nav -->
        <ul class="header-nav nav">

          <!-- .nav-item -->
          <li class="nav-item dropdown header-nav-dropdown">
            <a class="nav-link" href="{{url('/')}}" target="_blank">
              <h6> Go To Website </h6>
            </a> <!-- .dropdown-menu -->

          </li><!-- /.nav-item -->
        </ul><!-- /.nav -->
        <!-- .btn-account -->
        <div class="dropdown d-none d-md-flex">
          <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="{{asset('backend/assets/images/logo/logo-auction.png')}}" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">{{auth()->user()->name}}</span> <span class="account-description">{{auth()->user()->user_role->role}}</span></span></button> <!-- .dropdown-menu -->
          <div class="dropdown-menu">
            <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
            <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
            <h6 class="dropdown-header d-none d-md-block d-lg-none">{{auth()->user()->name}} </h6><a class="dropdown-item" href="{{asset('profile')}}"><span class="dropdown-icon oi oi-person"></span> Profile</a>
            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              <span class="dropdown-icon oi oi-account-logout"></span> Log Out
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </a>
            <a class="dropdown-item" href="#"><span class="dropdown-icon oi oi-key"></span> Change Password </a>
          </div><!-- /.dropdown-menu -->
        </div><!-- /.btn-account -->
      </div><!-- /.top-bar-item -->
    </div><!-- /.top-bar-list -->
  </div><!-- /.top-bar -->
</header><!-- /.app-header -->
<!-- .app-aside -->