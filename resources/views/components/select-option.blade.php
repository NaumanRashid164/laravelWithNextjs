@props(["name" ,'options', 'selected' => null])

@if ($options)
    <select name="{{ $name }}" {!! $attributes->merge(['class' => 'form-control']) !!}>
        @if (is_null($selected))
            <option value="">-- Select --</option>
        @endif
        @foreach ($options as $key => $value)
            <option value="{{ e($key) }}" {{ $key == $selected ? 'selected' : '' }}>
                {{ e($value) }}
            </option>
        @endforeach
    </select>
@endif