@props([
    'disabled' => false,
    'options' => [],
    'selected' => null,
    'name' => null,
    'placeholder' => null,
])
<select
    name="{{ $name }}"
    id="{{ $name }}"
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => 'form-select border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    <option class="text-sm font-medium" value="">{{ $placeholder }}</option>
    @foreach($options as $option)
        <option class="text-sm font-medium"
                value="{{ $option }}" {{ $selected == $option ? 'selected' : '' }}>{{ $option }}</option>
    @endforeach
</select>
