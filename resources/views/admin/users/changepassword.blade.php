@section('title', 'Change User Password')
@section('css_link')

@endsection
@section('css')
    <style>

    </style>
@endsection

<x-admin-layout>
    <x-slot:heading>
        <h4 class="card-title">{{ __('Change User Password') }}</h4>
    </x-slot:heading>
    <x-slot:body>
        <div class="basic-form">
            <form method="POST" action="{{ route('admin.user.changePassword') }}">
                @csrf
                <div class="form-group">
                    <x-text-input type="password" name="current_password" :value="old('current_password')" required
                        placeholder="Enter Current Password" />
                    <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                </div>
                <div class="form-group">
                    <x-text-input type="password" name="password" :value="old('password')" required
                        placeholder="New Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="form-group">
                    <x-text-input type="password" name="password_confirmation" :value="old('password_confirmation')" required
                        placeholder="Password Confirmation" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <x-primary-button class="float-end">{{ __('Update') }}</x-primary-button>

            </form>
        </div>
    </x-slot:body>
</x-admin-layout>

@section('js_link')

@endsection
