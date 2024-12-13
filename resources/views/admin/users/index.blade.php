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
        <x-primary-button type='button' onclick="window.location.href='{{ route('admin.user.create') }}'">Add
            New</x-primary-button>
    </x-slot:heading>
    <x-slot:body>
        <div class="table-responsive">
            <table id="table" class="display">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>Role</th> --}}
                        <th>is Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $row)
                        <tr>
                            <td>{{ ucFirst($row->name) }}</td>
                            <td>{{ $row->email }}</td>
                            {{-- <td>{{ implode(",", $row->roles->pluck("name")->toArray()) }}</td> --}}
                            <td>
                                <span class="badge badge-primary">{{ $row->is_active }}</span>
                            </td>
                            <td>
                                {{-- <div class="dropdown ms-auto text-end">
                                    @include('admin.partial.dropdown', [
                                        'dropDown' => [
                                            'Edit' => route('admin.user.edit', $row),
                                            'Delete' => route('admin.user.destroy', $row),
                                        ],
                                    ])
                                </div> --}}
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
