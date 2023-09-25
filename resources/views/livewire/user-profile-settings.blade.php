<div>
    <x-navbar />

    <x-button-menu active="Perfil" />

    <div class="container mx-auto card shadow-xl mt-5">
        <div class="card-body">
            <h2 class="card-title">Perfil</h2>
            <form wire:submit="saveChanges">
                <div class="grid grid-cols-2 gap-3">
                    <x-input label="Nome completo" placeholder="John Wizzard" wire:model="name" />

                    <x-input label="E-mail" placeholder="john@wizzard.com" type="email" wire:model="email" />
                </div>

                <x-input label="Digite sua senha para confirmar as alterações" placeholder="****" type="password" wire:model="password" />

                <div class="card-actions justify-end mt-3 flex items-center">
                    <button class="btn btn-primary" wire:target="name, email">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="toast toast-center" wire:dirty wire:target="name, email">
        <div class="alert alert-warning">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <span>Existem alterações não salvas.</span>
        </div>
    </div>
</div>
