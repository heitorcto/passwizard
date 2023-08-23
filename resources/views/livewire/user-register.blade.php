<div>
    <div class="bg-[#F9FAFB] h-screen w-screen flex items-center">
        <div class="h-max mx-auto flex flex-col items-center">
            <img class="h-[40px] w-[47px] mb-5" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            <h1 class="text-xl font-bold text-center pb-10">Sign in to your account</h1>
            <div class="bg-white shadow-xl p-10 flex flex-col gap-4 text-sm">
                <form wire:submit="register">
                    <div>
                        <label class="text-gray-600 font-bold inline-block pb-2" for="email">Nome</label>
                        <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="text" id="name" wire:model="name" placeholder="John Wizzard">
                    </div>
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror

                    <div class="mt-4">
                        <label class="text-gray-600 font-bold inline-block pb-2" for="email">Email</label>
                        <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="email" id="email" wire:model.live="email" placeholder="mehedi@jaman.com">
                    </div>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror

                    <div class="mt-4">
                        <label class="text-gray-600 font-bold inline-block pb-2" for="password">Senha</label>
                        <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="password" id="password" wire:model="password" placeholder="******">
                    </div>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror

                    <div class="mt-4">
                        <label class="text-gray-600 font-bold inline-block pb-2" for="password">Confirme a senha</label>
                        <input class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" type="password" id="confirmPassword" wire:model.live="confirmPassword" placeholder="******">
                    </div>
                    @error('confirmPassword')
                        <span class="error">{{ $message }}</span>
                    @enderror

                    <div class="my-4">
                        <button class="bg-[#2d2596] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#313c9e]">Registrar</button>
                    </div>

                    <div class="text-center my-3">
                        <a class="font-bold text-blue-600" href="/login">Já tem uma conta ?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
