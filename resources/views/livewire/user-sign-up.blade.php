<div>
    <div class="h-screen w-screen flex items-center">
        <div class="mx-auto flex flex-col items-center">

            <img alt="" class="h-[40px] w-[47px] mb-5" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600">
            @if (!$mailSended)
                <h1 class="text-xl font-bold text-center pb-10">Bem vindo ao Passwizard, registre-se!</h1>
            @else
                <h1 class="text-xl font-bold text-center pb-10">Estamos quase lá...</h1>
            @endif

            <div class="shadow-lg rounded-md p-12 flex flex-col gap-4 text-sm">
                @if (!$mailSended)
                    <form class="w-80" wire:submit="signUp">
                        <x-input label="Nome completo" placeholder="John Wizzard" wire:model="name" />

                        <x-input label="E-mail" placeholder="john@wizzard.com" wire:model="email" />

                        <x-input label="Senha" placeholder="****" type="password" wire:model="password" />

                        <x-input label="Confirme a senha" placeholder="****" type="password" wire:model="passwordConfirmation" />

                        <div class="my-4 flex justify-center">
                            <button @if ($errors->any()) disabled @endif class="btn btn-primary w-full @if ($errors->any()) opacity-50 @endif" wire:loading.attr="disabled" wire:loading.class="opacity-50">
                                Registrar
                                <span class="loading loading-infinity loading-md" wire:loading></span>
                            </button>
                        </div>

                        <div class="text-center my-3">
                            <a class="link" href="{{ route('user.signin') }}">Já tem uma conta?</a>
                        </div>
                    </form>
                @else
                    <div class="alert alert-info">
                        <svg class="stroke-current shrink-0 w-6 h-6" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                        <span>Verifique seu e-mail para confirma-lo.</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
