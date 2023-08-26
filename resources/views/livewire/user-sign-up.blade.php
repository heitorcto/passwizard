<div>
    <div class="h-screen w-screen flex items-center">
        <div class="mx-auto flex flex-col items-center">

            <img class="h-[40px] w-[47px] mb-5" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            @if (!$mailSended)
                <h1 class="text-xl font-bold text-center pb-10">Bem vindo ao Passwizard, registre-se!</h1>
            @else
                <h1 class="text-xl font-bold text-center pb-10">Estamos quase lá...</h1>
            @endif

            <div class="shadow-2xl rounded-md p-12 flex flex-col gap-4 text-sm">
                @if (!$mailSended)
                    <form wire:submit="signUp" class="w-80">
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Nome completo</span>
                            </label>
                            <input type="text" placeholder="John Wizzard" class="input input-bordered @error('name') input-error @else input-primary @enderror w-full" id="name" wire:model.live="name" />
                            <label class="label">
                                @error('name')
                                    <span class="label-text-alt text-red-600">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>

                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">E-mail</span>
                            </label>
                            <input type="email" placeholder="john@wizzard.com" class="input input-bordered @error('email') input-error @else input-primary @enderror w-full" id="email" wire:model.live="email" placeholder="mehedi@jaman.com" />
                            <label class="label">
                                @error('email')
                                    <span class="label-text-alt text-red-600">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>

                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Senha</span>
                            </label>
                            <input type="password" placeholder="****" class="input input-bordered @error('password') input-error @else input-primary @enderror w-full" id="password" wire:model.live="password" />
                            <label class="label">
                                @error('password')
                                    <span class="label-text-alt text-red-600">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>

                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Confirme a senha</span>
                            </label>
                            <input type="password" placeholder="****" class="input input-bordered @error('password_confirmation') input-error @else input-primary @enderror w-full" id="password_confirmation" wire:model.live="password_confirmation" />
                            <label class="label">
                                @error('password_confirmation')
                                    <span class="label-text-alt text-red-600">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>

                        <div class="my-4 flex justify-center">
                            <button class="btn btn-primary w-full @if ($errors->any()) opacity-50 @endif" wire:loading.class="opacity-50" @if ($errors->any()) disabled @endif wire:loading.attr="disabled">
                                Registrar
                                <span wire:loading class="loading loading-infinity loading-md"></span>
                            </button>
                        </div>

                        <div class="text-center my-3">
                            <a class="link" href="{{ route('signin') }}">Já tem uma conta?</a>
                        </div>
                    </form>
                @else
                    <div class="alert alert-info">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Verifique seu e-mail para confirma-lo.</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
