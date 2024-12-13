@extends('layouts.admin')
@section('title', 'Create User')
@section('css_link')

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
                    <h4 class="card-title">Create User</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{ route('admin.user.store') }}">
                            @csrf
                            <div class="form-group">
                                <x-text-input name="name" :value="old('name')" required placeholder="Enter Name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-text-input type="email" name="email" :value="old('email')" required placeholder="Enter Email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-text-input type="password" name="password" :value="old('password')" required placeholder="Enter Password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-text-input type="password" name="password_confirmation" :value="old('password_confirmation')" required placeholder="Confirmation Password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <x-input-label for="role" :value="__('Select Role')" />
                                @php $roles = getAllRoles()->pluck("name","name")->toArray(); @endphp
                                <x-select-option :name="__('role')" class="default-select" :options="$roles" />
                            </div>

                            <x-primary-button class="float-end">Create</x-primary-button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js_link')

@endsection