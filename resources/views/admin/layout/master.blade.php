<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
  <!-- Begin SEO tag -->
  <title> Auction Nepal Management System </title>
  <meta property="og:title" content="Starter Template">
  <meta name="author" content="Beni Arisandi">
  <meta property="og:locale" content="en_US">
  <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
  <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
  <link rel="canonical" href="https://uselooper.com">
  <meta property="og:url" content="https://uselooper.com">
  <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">

  <!-- FAVICONS -->
  <link rel="apple-touch-icon" sizes="144x144" href="{{asset('backend/assets/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{asset('backend/assets/favicons.png')}}">
  <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
  <!-- BEGIN PLUGINS STYLES -->

  <link rel="stylesheet" href="{{asset('backend/assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"><!-- END PLUGINS STYLES -->
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}"><!-- END PLUGINS STYLES -->
  <link rel="stylesheet" href="{{asset('backend/assets/vendor/flatpickr/flatpickr.min.css')}}">
  <!-- BEGIN THEME STYLES -->
  <link rel="stylesheet" href="{{asset('backend/assets/stylesheets/theme.min.css')}}" data-skin="default">
  <link rel="stylesheet" href="{{asset('backend/assets/stylesheets/theme-dark.min.css')}}" data-skin="dark">
  <link rel="stylesheet" href="{{asset('backend/assets/css/toastr.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/stylesheets/custom.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/plugins/sweetalert2/sweetalert2.min.css') }}">
  <script>
    var skin = localStorage.getItem('skin') || 'default';
    var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
    // Disable unused skin immediately
    disabledSkinStylesheet.setAttribute('rel', '');
    disabledSkinStylesheet.setAttribute('disabled', true);
    // add loading class to html immediately
    document.querySelector('html').classList.add('loading');
  </script><!-- END THEME STYLES -->
</head>

<body>
  <!-- .app -->
  <div class="app">
    <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
    <!-- .app-header -->
    @include('admin/layout/header')
    @include('admin/layout/aside')
    <main class="app-main">
      <!-- .wrapper -->
      <div class="wrapper">
        <!-- .page -->
        <div class="page">
          <!-- .page-inner -->
          <div class="page-inner">
            <!-- .page-title-bar -->
            @yield('content')
          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
      @include('admin/layout/footer')
    </main><!-- /.app-main -->
    @include('admin/layout/script')
  </div>
</body>

</html>