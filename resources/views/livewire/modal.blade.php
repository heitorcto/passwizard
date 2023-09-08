<dialog id="modal_wizard" class="modal {{ $modal }}">
    <div class="modal-box w-11/12 max-w-5xl">
        <h3 class="font-bold text-lg">Crie um container</h3>
        <div class="form-control">
            <div class="grid grid-cols-2 gap-3">
                <x-input label="Nome" type="text" wire="name" holder="john@wizzard.com" />
                <x-input label="Nome de usuário" type="text" wire="username" holder="john@wizzard.com" />
                <x-input label="E-mail" type="email" wire="email" holder="john@wizzard.com" />
                <x-input type="wizard" />
            </div>
            <x-input label="Observações" type="textarea" wire="observation" holder="You shall not pass..." />
        </div>
        <div class="modal-action">
            <form method="dialog">
                <button class="btn" wire:click="resetAll">Close</button>
            </form>
            <button class="btn btn-primary" wire:click="create">Criar</button>
        </div>
    </div>
</dialog>
