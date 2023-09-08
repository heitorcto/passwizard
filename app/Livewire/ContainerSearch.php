<?php

namespace App\Livewire;

use Livewire\Component;

class ContainerSearch extends Component
{
    public $container, $favorites;

    public function setFavorites()
    {
        $this->favorites = $this->favorites ? '' : 'S';
        $this->dispatch('set-favorites', favorites: $this->favorites);
    }

    public function setContainers()
    {
        $this->dispatch('set-containers', container: $this->container);
    }

    public function render()
    {
        return view('livewire.container-search');
    }
}
