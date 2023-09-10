<?php

namespace App\Livewire;

use Livewire\Component;

class ContainerSearch extends Component
{
    public $container;

    public $favorites;

    public function render()
    {
        return view('livewire.container-search');
    }

    public function setFavorites()
    {
        $this->favorites = $this->favorites ? false : true;
        $this->dispatch('set-favorites', favorites: $this->favorites);
    }

    public function setContainers()
    {
        $this->dispatch('set-containers', container: $this->container);
    }
}
