@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label mb-1']) }}><strong>{{ $value ?? $slot }}</strong></label>