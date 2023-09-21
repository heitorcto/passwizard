<div class="container m-auto shadow-xl navbar bg-base-300 mt-5 rounded-md">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl" href="{{ route('dashboard') }}" wire:navigate>Passwizard</a>
    </div>
    <div class="flex items-end gap-4">
        <div class="dropdown dropdown-end">
            <label class="btn btn-ghost btn-circle avatar" tabindex="0">
                <div class="avatar placeholder">
                    <div class="bg-neutral-focus text-neutral-content rounded-full w-10">
                        <span class="text-xs">{{ Auth::user()->name[0] }}</span>
                    </div>
                </div>
            </label>
            <ul class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52" tabindex="0">
                <li><a href="{{ route('user.profile.settings') }}" wire:navigate>Configurações</a></li>
                <li><a href="{{ route('user.signout') }}" wire:navigate>Sair</a></li>
            </ul>
        </div>
    </div>
</div>
