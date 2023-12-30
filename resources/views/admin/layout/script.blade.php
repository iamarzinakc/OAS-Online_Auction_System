
<!-- <script src="{{asset('backend/assets/vendor/jquery/jquery.min.js')}}"></script> -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>
<script src="{{asset('backend/assets/vendor/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('backend/assets/javascript/pages/toastr.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/popper.js/umd/popper.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/pace-progress/pace.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/stacked-menu/js/stacked-menu.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="{{asset('backend/assets/javascript/theme.min.js')}}"></script>
<script>

    const Toast = Swal.mixin({
        toast: true,
        animation: true,
        position: 'top-right',
        showConfirmButton: false,
        timer: 30,
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

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-116692175-1');

    

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


    });
</script>

<script src="{{asset('backend/assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/assets/javascript/pages/dataTables.bootstrap.js')}}"></script>

<script>
    $(function() {
        var dataTable = $('#dataTables').DataTable({
            dom: 'Blfrtip',
            buttons: [{
                    extend: 'pdf'
                },
                {
                    extend: 'print'
                },
                {
                    extend: 'excel'
                },
                {
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                }, {
                    extend: 'colvis'
                }
            ],
            autoWidth: false
        });
    });
</script>
<script>
    $(function() {
        $('#stacked-menu .menu .menu-item#dashboard').addClass('has-active')
        $('#stacked-menu .menu .menu-item#manageVehicles .menu .menu-item#vehicleTypes').addClass(
            'has-active');
    });
</script>