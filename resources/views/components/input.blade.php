@props(['label', 'type' => 'text', 'wire', 'holder', 'keydown' => ''])

@if ($type === 'wizard')
    <div>
        <label class="label">
            <span class="label-text">Senha</span>
        </label>
        <div class="flex items-center join">
            <input type="text" placeholder="Wizard..." wire:model.live="password" class="input join-item input-bordered @error('password') input-error @else input-primary @enderror w-full" />
            <button class="btn btn-primary join-item"><i class="fa-solid fa-rotate"></i></button>
            <button class="btn btn-primary join-item"><i class="fa-regular fa-copy"></i></button>
        </div>
        <label class="label">
            @error('password')
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            @enderror
        </label>
    </div>
@elseif ($type === 'textarea')
    <label class="label">
        <span class="label-text">{{ $label }}</span>
    </label>
    <textarea class="textarea textarea-primary w-full" wire:model.live="{{ $wire }}" placeholder="{{ $holder }}"></textarea>
    <label class="label">
        @error($wire)
            <span class="label-text-alt text-red-600">{{ $message }}</span>
        @enderror
    </label>
@else
    <div class="form-control w-full">
        <label class="label">
            <span class="label-text">{{ $label }}</span>
        </label>
        <input type="{{ $type }}" placeholder="{{ $holder }}" class="input input-bordered @error($wire) input-error @else input-primary @enderror w-full" id="{{ $wire }}" wire:model.live="{{ $wire }}" @if($keydown) wire:keydown="{{ $keydown }}" @endif />
        <label class="label">
            @error($wire)
                <span class="label-text-alt text-red-600">{{ $message }}</span>
            @enderror
        </label>
    </div>
@endif
