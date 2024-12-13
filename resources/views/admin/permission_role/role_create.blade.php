@section('title', $pageTitle)
@section('css_link')

@endsection
@section('css')
    <style>

    </style>
@endsection

<x-admin-layout>
    <x-slot:heading>
        <h4 class="card-title">{{ __($pageTitle) }}</h4>
    </x-slot:heading>
    <x-slot:body>
        <div class="basic-form">
            <form method="POST" action="{{ route('admin.roles.store') }}">
                @csrf
                <div class="form-group">
                    <x-text-input name="name" :value="old('name')" required
                        placeholder="Enter Role" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <x-primary-button class="float-end">{{ __('Create') }}</x-primary-button>

            </form>
        </div>
    </x-slot:body>
</x-admin-layout>


@section('js_link')

@endsection
