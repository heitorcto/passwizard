@props(['label', 'type' => 'text', 'wire', 'holder'])

<div class="form-control w-full">
    <label class="label">
        <span class="label-text">{{ $label }}</span>
    </label>
    <input type="{{ $type }}" placeholder="{{ $holder }}" class="input input-bordered @error($wire) input-error @else input-primary @enderror w-full" id="{{ $wire }}" wire:model.live="{{ $wire }}" />
    <label class="label">
        @error($wire)
            <span class="label-text-alt text-red-600">{{ $message }}</span>
        @enderror
    </label>
</div>
