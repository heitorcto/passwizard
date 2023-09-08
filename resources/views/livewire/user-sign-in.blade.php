<div class="h-screen w-screen flex items-center">
    <div class="mx-auto flex flex-col items-center">

        <img class="h-[40px] w-[47px] mb-5" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">

        <h1 class="text-xl font-bold text-center pb-10">Entre no Passwizard!</h1>

        <div class="shadow-lg rounded-md p-12 flex flex-col gap-4 text-sm">
            <form wire:submit="signIn" class="w-80">
                @if ($signInError)
                    <div class="form-control w-full mb-3">
                        <div class="alert alert-error">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>E-mail ou senha inválidos.</span>
                        </div>
                    </div>
                @endif

                <x-input label="E-mail" type="email" wire="email" holder="john@wizzard.com" />

                <x-input label="Senha" type="password" wire="password" holder="****" />

                <div class="my-4 flex justify-center">
                    <button class="btn btn-primary w-full @if ($errors->any()) opacity-50 @endif" wire:loading.class="opacity-50" @if ($errors->any()) disabled @endif wire:loading.attr="disabled">
                        Entrar
                        <span wire:loading class="loading loading-infinity loading-md"></span>
                    </button>
                </div>

                <div class="text-center my-3">
                    <a class="link" href="{{ route('user.signup') }}">Não tem uma conta?</a>
                </div>
            </form>
        </div>
    </div>
</div>
