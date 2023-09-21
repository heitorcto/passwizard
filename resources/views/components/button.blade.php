@props(['click', 'name' => '', 'class' => '', 'icon' => ''])

<button class="btn {{ $class }}" wire:click="{{ $click }}" wire:loading.attr="disabled" wire:target="{{ $click }}">
    <span wire:loading.remove wire:target="{{ $click }}">{{ $name }} <i class="{{ $icon }}"></i></span>
    <span class="loading loading-infinity loading-md" wire:loading wire:target="{{ $click }}"></span>
</button>
