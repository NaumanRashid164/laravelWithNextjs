@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'alert alert-danger']) }}>
        @foreach ((array) $messages as $message)
            <li class="list-unstyled">{{ $message }}</li>
        @endforeach
    </ul>
@endif