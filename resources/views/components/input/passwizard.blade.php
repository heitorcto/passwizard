<div>
    <label class="label">
        <span class="label-text">Senha</span>
    </label>
    <div class="flex items-center join">
        <input class="input join-item input-bordered @error('password') input-error @else input-primary @enderror w-full" placeholder="Wizard..." type="text" wire:model.live="password" />
        <button class="btn btn-primary join-item" wire:click="generatePassword"><i class="fa-solid fa-rotate"></i></button>
        <button class="btn btn-primary join-item"><i class="fa-regular fa-copy"></i></button>
    </div>
    <label class="label">
        @error('password')
            <span class="label-text-alt text-red-600">{{ $message }}</span>
        @enderror
    </label>
</div>
