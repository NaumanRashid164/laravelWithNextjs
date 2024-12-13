@extends('layouts.admin')
@section('title', 'Setting')
@section('css_link')
    <link href="{{ asset('Admin/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
@endsection
@section('css')
    <style>

    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Setting</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{ route('admin.setting.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-12">
                                    <label class="text-label">Theme Mode</label>
                                    <div class="form-group mb-0">
                                        <div class="form-check d-inline-block">
                                            <input class="form-check-input" type="radio" name="theme_mode"
                                                @checked(\Setting::getValByName('theme_mode') == "light") id="flexRadioDefault4" value="light">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Light
                                            </label>
                                        </div>
                                        <div class="form-check d-inline-block mx-2">
                                            <input class="form-check-input" @checked(\Setting::getValByName('theme_mode') == "dark") type="radio" name="theme_mode"
                                                id="flexRadioDefault5" value="dark">
                                            <label class="form-check-label" for="flexRadioDefault5">
                                                Dark
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 mb-3">
                                    <div class="example">
                                        <p class="mb-1">Primary Color</p>
                                        <x-text-input name="primary_color" class="as_colorpicker"
                                            value="{{ \Setting::getValByName('primary_color') }}" id="" />
                                        {{-- <input type="text" class="as_colorpicker form-control" value="#7ab2fa"> --}}
                                        <x-input-error :messages="$errors->get('primary_color')" class="mt-2" />

                                    </div>
                                </div>
                                <div class="col-lg-5 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Site Name</label>
                                        <x-text-input type="text" name="site_name"
                                            value="{{ \Setting::getValByName('site_name') }}" id="" />
                                        <x-input-error :messages="$errors->get('site_name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Site Logo</label>
                                        <div class="mb-2">
                                            <img id="img-preview" src="{{ asset('logo.png') }}" alt=""
                                                class="w-25">
                                        </div>
                                        <x-text-input type="file" accept=".png,.jpg,.jpeg"
                                            data-image_preview="#img-preview" name="site_logo"
                                            value="{{ \Setting::getValByName('site_logo') }}" id="" />
                                        <x-input-error :messages="$errors->get('site_logo')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Fav Icon</label>
                                        <div class="mb-2">
                                            <img id="img-preview1" src="{{ asset('favicon.png') }}" alt=""
                                                class="w-25">
                                        </div>
                                        <x-text-input type="file" accept=".png,.jpg,.jpeg"
                                            data-image_preview="#img-preview1" name="fav_logo"
                                            value="{{ \Setting::getValByName('fav_logo') }}" id="" />
                                        <x-input-error :messages="$errors->get('fav_logo')" class="mt-2" />
                                    </div>
                                </div>
                            </div>

                            <x-primary-button class="float-end">Update</x-primary-button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js_link')
    <script src="{{ asset('Admin/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
    <script>
        // Colorpicker
        $(".as_colorpicker").asColorPicker();
    </script>
@endsection

@section('js')
    <script></script>
@endsection