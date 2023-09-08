<div class="container m-auto shadow-xl navbar bg-base-300 mt-5 rounded-md">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">Passwizard</a>
    </div>
    <div class="flex items-end gap-4">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="avatar placeholder">
                    <div class="bg-neutral-focus text-neutral-content rounded-full w-10">
                        <span class="text-xs">{{ Auth::user()->name[0] }}</span>
                    </div>
                </div>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a class="justify-between">Profile</a></li>
                <li><a>Settings</a></li>
                <li><a href="/signout">Sair</a></li>
            </ul>
        </div>
    </div>
</div>
