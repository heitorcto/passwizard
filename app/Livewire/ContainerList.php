<?php

namespace App\Livewire;

use App\Models\Container;
use Livewire\Attributes\On;
use Livewire\Component;

class ContainerList extends Component
{
    public $container, $favorited;

    #[On('favorite')]
    public function favorite($containerId)
    {
        $container = Container::findOrFail($containerId);
        $container->favorited = $container->favorited === 'S' ? '' : 'S';
        $container->save();
    }

    #[On('create')]
    public function create($data)
    {
        Container::create($data);
    }

    #[On('set-favorites')]
    public function setFavorites($favorites)
    {
        $this->favorited = $favorites ? 'S' : '';
    }

    #[On('set-containers')]
    public function setContainers($container)
    {
        $this->container = $container;
    }

    public function render()
    {
        $container = Container::orderBy('created_at', 'desc');

        if ($this->container) {
            $container->where('name', 'like', '%'.$this->container.'%');
        }

        if ($this->favorited) {
            $container->where('favorited', $this->favorited);
        }

        return view('livewire.container-list', [
            'containers' => $container->get()
        ]);
    }
}
