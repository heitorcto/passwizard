<div>
    <x-navbar />

    <x-button-menu active="Segurança" />

    <div class="container mx-auto card shadow-xl mt-5">
        <div class="card-body">
            <h2 class="card-title">Segurança</h2>
            <form wire:submit="saveChanges">
                <div class="grid grid-cols-2 gap-3">
                    <x-input holder="John Wizzard" label="Nome Completo" wire="name" />

                    <x-input holder="john@wizzard.com" label="E-mail" type="email" wire="email" />

                    <x-input holder="john@wizzard.com" label="E-mail" type="email" wire="email" />

                    {{-- <div wire:dirty wire:ignore>Unsaved changes...</div> --}}
                </div>
                <div class="card-actions justify-end mt-3">
                    <button class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
