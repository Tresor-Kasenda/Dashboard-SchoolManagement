@props([
    'brandcrumb' => null,
])
<div {{ $attributes->class(['nk-content-body']) }}>
    @if($brandcrumb)
        {{ $brandcrumb }}
    @endif

    <div class="nk-block">
        {{ $slot }}
    </div>
</div>
