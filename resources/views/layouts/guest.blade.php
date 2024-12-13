@props(['title' => config('app.name', 'CRM')])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ sprintf("%s || %s",$title,config('app.name', 'CRM')) }}</title> --}}
    <title>@yield('title') || {{ config('app.name', 'CRM') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="CRM" name="description" />
    <meta content="M Nauman Rashid" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}">

    <link href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <img src="{{asset(\Setting::getValByName('site_logo'))}}" class="w-20 h-20 fill-current text-gray-500" >
                                        {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                                    </div>
                                    {{ $slot }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/js/deznav-init.js') }}"></script>

</body>

</html>
