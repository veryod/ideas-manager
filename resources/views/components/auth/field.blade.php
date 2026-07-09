@props(['name', 'label', 'type'])

<div class="field">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" {{ $attributes }}>
</div>