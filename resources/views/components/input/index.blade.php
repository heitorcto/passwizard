@props(['label', 'type' => 'text', 'placeholder' => null])

@php
    $wire = $attributes->whereStartsWith('wire:model')->first();
@endphp

<div class="form-control w-full">
    <label class="label">
        <span class="label-text">{{ $label }}</span>
    </label>

    <input {{ $attributes->merge() }} class="input input-bordered @error($wire) input-error @else input-primary @enderror w-full" placeholder="{{ $placeholder }}" type="{{ $type }}" />

    <label class="label">
        @error($wire)
            <span class="label-text-alt text-red-600">{{ $message }}</span>
        @enderror
    </label>
</div>
