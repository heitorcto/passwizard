<div class="col-start-1 col-span-2">
    <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center mb-3">Buscar</h2>
            <x-input label="Container" type="text" wire="container" holder="Wizard..." keydown="setContainers" />
            <div class="form-control w-52">
                <label class="cursor-pointer label">
                    <span class="label-text">Favoritos</span>
                    <input type="checkbox" class="toggle toggle-primary" wire:click="setFavorites" />
                </label>
            </div>
        </div>
    </div>
</div>
