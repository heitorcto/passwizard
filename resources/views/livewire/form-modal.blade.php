<dialog id="modal_wizard" class="modal {{ $modal }}">
    <div class="modal-box w-11/12 max-w-5xl">
        <h3 class="font-bold text-lg">Crie um container</h3>
        <div class="form-control">
            <div class="grid grid-cols-2 gap-3">
                <x-input label="Nome" wire:model="name" placeholder="New Zealand" />
                <x-input label="Nome de usuário" wire:model="username" placeholder="John Wizzard" />
                <x-input label="E-mail" type="email" wire:model="email" placeholder="john@wizzard.com" />
                <x-input.passwizard />
            </div>
            <x-input.textarea label="Observações" wire:model="observation" placeholder="You shall not pass..." />
        </div>
        <div class="flex mt-5">
            <div class="flex w-full justify-start gap-3">
                @if ($edit)
                    @if (!$this->delete)
                        <x-button click="deleteConfirmation" icon="fa-regular fa-trash-can"  class="btn-error w-14 text-xl" />
                        @else
                        <x-button click="deleteContainer" icon="fa-solid fa-check" class="btn-success w-14 text-xl" />
                        <x-button click="deleteConfirmation" icon="fa-solid fa-xmark"  class="btn-error w-14 text-xl" />
                    @endif
                @endif
            </div>
            <div class="flex w-1 justify-end gap-3">
                <x-button click="resetAll" name="Fechar" class="w-28" />
                @if ($edit)
                    <x-button click="update" name="Editar" class="btn-primary w-28" />
                @else
                    <x-button click="create" name="Criar" class="btn-primary w-28" />
                @endif
            </div>
        </div>
    </div>
</dialog>
