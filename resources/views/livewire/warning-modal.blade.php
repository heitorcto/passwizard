<div>
    @if (Auth::user()->email_verified_at === null)
        <dialog class="modal modal-open">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Olá!</h3>
                <p class="py-4">Você ainda não verificou seu e-mail, para prosseguir, cheque o e-mail que encaminhamos para sua caixa de entrada!</p>
                <div class="modal-action">
                    <button class="btn btn-info" wire:click="resendMail" wire:taget="resendMail" wire:loading.attr="disabled">
                        Reenviar e-mail
                        <span wire:loading class="loading loading-infinity loading-md"></span>
                    </button>
                </div>
            </div>
        </dialog>
    @endif
</div>
