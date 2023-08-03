@props([
    'route' => null,
])
<div {{ $attributes->class(['nk-sidebar-brand']) }}>
    <a href="{{ $route }}" class="logo-link nk-sidebar-logo">
        <img
            class="logo-light logo-img"
            src=" {{ asset('images/vinco.svg') }}"
            srcset=" {{ asset('images/vinco.svg') }}2x"
            alt="logo">
        <img
            class="logo-dark logo-img"
            src="{{ asset('images/vinco-dark.png') }}"
            srcset=" {{ asset('images/vinco-dark.png') }}2x"
            alt="logo-dark">
        <img
            class="logo-small logo-img logo-img-small"
            src="{{ asset('images/vinco.svg') }}"
            srcset=" {{ asset('images/vinco.svg') }}2x"
            alt="logo-small">
    </a>
</div>
