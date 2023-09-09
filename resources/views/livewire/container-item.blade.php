<div>
    <div class="grid card rounded-box place-items-center">
        <div class="alert">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info shrink-0 w-6 h-12">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>{{ $container->name }}</span>
            <div class="flex items-center gap-3">
                <div class="rating rating-md">
                    <input type="radio" name="rating-5" class="mask mask-star-2 @if ($container->favorited) bg-orange-400 @else bg-neutral @endif" wire:click="favorite" wire:loading.remove wire:target="favorite" />
                    <span class="loading loading-infinity loading-xs" wire:loading wire:target="favorite"></span>
                </div>
                <button class="btn btn-sm btn-primary" wire:click="$dispatch('open-modal'), $dispatch('access-container', { id: {{ $container->id }} })">Acessar</button>
            </div>
        </div>
    </div>
    <div class="divider"></div>
</div>
