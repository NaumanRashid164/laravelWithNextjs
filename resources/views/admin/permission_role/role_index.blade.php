@section('title', $title)
@section('css_link')

@endsection
@section('css')
    <style>

    </style>
@endsection

<x-admin-layout>
    <x-slot:heading>
        <h4 class="card-title">{{ __($title) }}</h4>
        <x-primary-button type='button' onclick="window.location.href='{{ route('admin.roles.create') }}'">Add
            New</x-primary-button>
    </x-slot:heading>
    <x-slot:body>
        <div class="table-responsive">
            <table id="table" class="display">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $id=>$name)
                        <tr>
                            <td>{{ ucFirst(str_replace("-"," ", $name)) }}</td>
                            <td> 
                                {{-- <div class="dropdown ms-auto text-end">
                                    @include('admin.partial.dropdown', [
                                        'dropDown' => [
                                            'Edit' => route('admin.user.edit', $id),
                                            'Delete' => route('admin.user.destroy', $id),
                                        ],
                                    ]) --}}
                                </div>
                            </td>
                        </tr>
                    @empty
                        @include('admin.partial.no-record')
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-slot:body>
</x-admin-layout>


@section('js_link')

@endsection
