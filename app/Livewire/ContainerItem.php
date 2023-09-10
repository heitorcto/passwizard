<?php

namespace App\Livewire;

use App\Models\Container;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ContainerItem extends Component
{
    #[Reactive]
    public Container $container;

    public function render()
    {
        return view('livewire.container-item');
    }

    public function favorite()
    {
        $this->dispatch('favorite', containerId: $this->container->id);
    }
}
