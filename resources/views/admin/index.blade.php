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
        <x-primary-button type='button' onclick="window.location.href='{{ route('admin.user.create') }}'">Add
            New</x-primary-button>
    </x-slot:heading>
    <x-slot:body>
        <div class="table-responsive">
            <table id="table" class="display">
                <thead>
                    <tr>
                        @foreach ($list as $heading => $item)
                            <th>{!! ucFirst($heading) !!}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @php $out =[]; @endphp
                    @foreach ($records as $record)
                        <tr>
                            @foreach ($list as $heading => $column)
                                <td>{{ $record->$column }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot:body>
</x-admin-layout>


@section('js_link')

@endsection
