@props(['icon'])
<i {{ $attributes->merge(['class' => 'mdi ' . $icon]) }}></i>