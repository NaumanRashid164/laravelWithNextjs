<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" href="{{ asset(\Setting::getValByName('fav_logo')) }}">


    <!-- Page Title Here -->
    <title>@yield('title') || {{ \Setting::getValByName('site_name') }}</title>

    @yield('css_link')
    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/toastr/css/toastr.min.css') }}">
    <!-- Datatable -->
    <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/vendor/pickadate/themes/default.date.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

    <style>
        :root {
            --bs-primary: {{ \Setting::getValByName('primary_color') }};
        }
    </style>
    @yield('css')

</head>

<body data-theme-version="light">


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">



        <!--**********************************
            Nav header start
        ***********************************-->
        @include('admin.partial.header')

        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Sidebar start
        ***********************************-->

        @include('admin.partial.sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
                @if (isset($heading) && isset($body))
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    {{ $heading }}
                                </div>
                                <div class="card-body">
                                    {{ $body }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->

        @include('admin.partial.footer')

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

</body>
<!--**********************************
    Scripts
***********************************-->

<!-- Required vendors -->
<script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('admin/vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins-init/jquery.validate-init.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ asset('admin/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<script src="{{ asset('admin/js/deznav-init.js') }}"></script>
<!-- toastr -->
<script src="{{ asset('admin/vendor/toastr/js/toastr.min.js') }}"></script>

<script src="{{ asset('common.js') }}"></script>

@yield('js_link')

<script>
    $(body).attr("data-theme-version", @json(\Setting::getValByName('theme_mode')))

    let baselink = @json(url('/'));

    var table = $('#table').DataTable();
    toastr.options = {
        timeOut: 5000,
        // closeButton: !0,
        // debug: !1,
        // newestOnTop: !0,
        // progressBar: !0,
        positionClass: "toast-top-right",
        preventDuplicates: !0,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        // extendedTimeOut: "1000",
        // showEasing: "swing",
        // hideEasing: "linear",
        // showMethod: "fadeIn",
        // hideMethod: "fadeOut",
        // tapToDismiss: !1
    };
    @if (Session::has('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.warning("{{ session('warning') }}");
    @endif
</script>

<script>
    $(document).on("click", ".btn-delete", function(e) {
        e.preventDefault();
        if (confirm("Are you sure?")) {
            $(this).closest('form').submit();
        }
    });
</script>

@yield('js')

</html>
