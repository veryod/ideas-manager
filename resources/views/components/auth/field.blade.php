@props(['name', 'label', 'type'])

<div class="field">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name) }}" {{ $attributes }}>
    @error($name)
        <div class="error flex text-red-500">{{ $message }}</div>
    @enderror
</div>