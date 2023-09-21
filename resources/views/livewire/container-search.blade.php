<div class="col-start-1 col-span-2">
    <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-3">Buscar</h2>
            <x-input label="Container" placeholder="Wizard..." wire:keydown="setContainers" wire:model.live="container" />
            <div class="form-control w-28">
                <label class="label cursor-pointer">
                    <span class="label-text">Favoritos</span>
                    <input class="checkbox checkbox-primary" type="checkbox" wire:click="setFavorites" />
                </label>
            </div>
        </div>
        <div class="h-12 flex justify-center">
            <span class="loading loading-infinity loading-lg" wire:loading></span>
        </div>
    </div>
</div>
