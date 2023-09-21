@props(['active'])

<div class="container mx-auto mt-5">
    <div class="flex justify-center">
        <ul class="menu bg-base-200 lg:menu-horizontal rounded-box">
            <li>
                <a @if ($active === 'Perfil') class="active" @else href="{{ route('user.profile.settings') }}" wire:navigate @endif>
                    <i class="fa-solid fa-user"></i>
                    Perfil
                </a>
            </li>
            <li>
                <a @if ($active === 'Segurança') class="active" @else href="{{ route('user.security.settings') }}" wire:navigate @endif>
                    <i class="fa-solid fa-lock"></i>
                    Segurança
                </a>
            </li>
            <li>
                <a @if ($active === 'Temas') class="active" @endif>
                    <i class="fa-solid fa-palette"></i>
                    Temas
                </a>
            </li>
            <li>
                <a @if ($active === 'Pro') class="active" @endif>
                    <i class="fa-solid fa-crown"></i>
                    Pro
                </a>
            </li>
        </ul>
    </div>
</div>
