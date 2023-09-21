@props(['label', 'placeholder' => null])

@php
    $wire = $attributes->whereStartsWith('wire:model')->first();
@endphp

<label class="label">
    <span class="label-text">{{ $label }}</span>
</label>
<textarea class="textarea textarea-primary w-full" placeholder="{{ $placeholder }}"></textarea>
<label class="label">
    @error($wire)
        <span class="label-text-alt text-red-600">{{ $message }}</span>
    @enderror
</label>
