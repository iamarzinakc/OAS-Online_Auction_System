<script data-cfasync="false" src="{{asset('frontend/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/waypoints.js')}}"></script>
<script src="{{asset('frontend/assets/js/nice-select.js')}}"></script>
<script src="{{asset('frontend/assets/js/counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/yscountdown.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
<script src="{{ asset('frontend/assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
<!-- <script src="{{ asset('frontend/assets/js/app.js') }}"></script> -->
<script>
    const Toast = Swal.mixin({
        toast: true,
        animation: true,
        position: 'top-right',
        showConfirmButton: false,
        timer: 3000,
    });

    @if(Session()->has('message'))
    Toast.fire({
        'icon': `{{ Session()->get('icon') }}`,
        'title': `{{ Session()->get('message') }}`,
    });
    @endif


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>

</html>