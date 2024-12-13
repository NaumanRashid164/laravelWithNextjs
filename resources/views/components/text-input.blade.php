@props(['disabled' => false, 'useFormControl' => true])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $useFormControl ? 'form-control' : '']) !!}>