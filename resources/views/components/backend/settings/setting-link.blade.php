@props([
    'route'
])

@php
    $classes = Request::url() === $route ? 'active': '';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <a href="{{ $route }}">
        {{ $slot }}
    </a>
</li>
