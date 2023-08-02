@props([
    'route'
])
<li {{ $attributes->class(['nk-menu-item']) }} {{ Request::url() === $route ? 'active current-page': '' }}">
<a href="{{ $route ?? "" }}" class="nk-menu-link">
    {{ $slot }}
</a>
</li>
