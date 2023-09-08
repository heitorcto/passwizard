<div class="col-start-3 col-span-4">
    <div class="flex justify-center my-5">
        <button class="btn btn-primary" wire:click="$dispatch('open-modal')">Criar container</button>
    </div>
    <div class="flex flex-col w-full">
        @foreach ($containers as $container)
            <livewire:container-item :$container :key="$container->id" />
        @endforeach
    </div>
</div>
