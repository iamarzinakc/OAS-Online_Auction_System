<!-- .app-aside -->
<aside class="app-aside app-aside-expand-md app-aside-light">
  <!-- .aside-content -->
  <div class="aside-content">
    <!-- .aside-header -->
    <header class="aside-header d-block d-md-none">
      <!-- .btn-account -->
      <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="{{asset('backend/assets/images/avatars/profile.jpg')}}" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
      <!-- .dropdown-aside -->
      <div id="dropdown-aside" class="dropdown-aside collapse">
        <!-- dropdown-items -->
        <div class="pb-3">
          <a class="dropdown-item" href="{{asset('profile')}}"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="{{route('logout')}}"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>

        </div><!-- /dropdown-items -->
      </div><!-- /.dropdown-aside -->
    </header><!-- /.aside-header -->
    <!-- .aside-menu -->
    <div class="aside-menu overflow-hidden">
      <!-- .stacked-menu -->
      <nav id="stacked-menu" class="stacked-menu">
        <!-- .menu -->
        <ul class="menu">
          <!-- .menu-item -->
          <li class="menu-item has-active">
            <a href="{{url('admin/')}}" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
          </li><!-- /.menu-item -->
          <!-- .menu-item -->
          <li class="menu-item">
            <a href="{{asset('admin/companyInfo')}}" class="menu-link"><span class="menu-icon fas fa-building text-success"></span> <span class="menu-text text-success">Company Info</span></a>
          </li><!-- /.menu-item -->
          <!-- .menu-item -->
          
          <!-- .menu-item -->
          <li class="menu-item has-child">
            <a href="#" class="menu-link"><span class="menu-icon fa fa-car text-primary"></span> <span class="menu-text text-primary">Products Management</span></a> <!-- child menu -->
            <ul class="menu">
              <li class="menu-item">
              <li class="menu-item">
                <a href="{{asset('admin/product/type')}}" class="menu-link"> Types</a>

              <li class="menu-item">
                <a href="{{asset('admin/product/brand')}}" class="menu-link">Brands</a>
              </li>
              <li class="menu-item">
                <a href="{{asset('admin/product/category')}}" class="menu-link">Category</a>
              </li>
              <li class="menu-item">
                <a href="{{asset('admin/product/feature')}}" class="menu-link">Feature</a>
              </li>
          </li>
          <a href="{{asset('admin/product')}}" class="menu-link">Products</a>
          </li>

        </ul><!-- /child menu -->
        </li><!-- /.menu-item -->

       
        <!-- .menu-item -->
        <li class="menu-item has-child">
          <a href="#" class="menu-link"><span class="menu-icon oi oi-person text-danger"></span> <span class="menu-text text-danger">Settings</span></a> <!-- child menu -->
          <ul class="menu">
            <li class="menu-item">
              <a href="{{asset('admin/user_role')}}" class="menu-link">User Type</a>
            </li>
            <li class="menu-item">
              <a href="{{asset('admin/user')}}" class="menu-link"> Users </a>
            </li>
            <li class="menu-item">
              <a href="{{asset('admin/branch')}}" class="menu-link"> Branches </a>
            </li>
            <li class="menu-item">
              <a href="{{asset('admin/country')}}" class="menu-link"> Countries </a>
            </li>
          </ul><!-- /child menu -->
        </li><!-- /.menu-item -->


        <li class="menu-item has-child">
          <a href="#" class="menu-link"><span class="menu-icon fa fa-globe text-success"></span> <span class="menu-text text-success">Site Management</span></a> <!-- child menu -->
          <ul class="menu">
            <li class="menu-item">
              <a href="{{asset('admin/article_type')}}" class="menu-link">Article Type</a>
            </li>
            <li class="menu-item">
              <a href="{{asset('admin/article')}}" class="menu-link">Articles</a>
            </li>
            <li class="menu-item">
              <a href="{{asset('admin/testimonial')}}" class="menu-link">testimonials</a>
            </li>
            <li class="menu-item">
              <a href="{{asset('admin/contact')}}" class="menu-link">Contact Us</a>
            </li>
            <li class="menu-item">
              <a href="{{asset('admin/faq')}}" class="menu-link">FAQ</a>
            </li>
          </ul><!-- /child menu -->
        </li><!-- /.menu-item -->

        </ul><!-- /.menu -->
      </nav><!-- /.stacked-menu -->
    </div><!-- /.aside-menu -->
    <!-- Skin changer -->
    <footer class="aside-footer border-top p-2">
      <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
    </footer><!-- /Skin changer -->
  </div><!-- /.aside-content -->
</aside><!-- /.app-aside -->