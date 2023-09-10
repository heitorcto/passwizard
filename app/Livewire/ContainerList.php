<?php

namespace App\Livewire;

use App\Models\Container;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class ContainerList extends Component
{
    public $container;

    public $favorites;

    public function placeholder()
    {
        return view('components.container-list-placeholder');
    }

    public function render()
    {
        $containers = Container::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc');

        if ($this->container) {
            $containers->where('name', 'like', '%'.$this->container.'%');
        }

        if ($this->favorites) {
            $containers->where('favorited', $this->favorites);
        }

        return view('livewire.container-list', [
            'containers' => $containers->get(),
        ]);
    }

    #[On('create')]
    public function create($data)
    {
        $data['user_id'] = Auth::user()->id;
        Container::create($data);
    }

    #[On('update')]
    public function update($id, $data)
    {
        $data['user_id'] = Auth::user()->id;
        $container = Container::findOrFail($id);
        $container->update($data);
    }

    #[On('delete-container')]
    public function delete($id)
    {
        Container::where('user_id', Auth::user()->id)
            ->where('id', $id)
            ->delete();
    }

    #[On('favorite')]
    public function favorite($containerId)
    {
        $container = Container::findOrFail($containerId);
        $container->favorited = $container->favorited === 'S' ? '' : 'S';
        $container->save();
    }

    #[On('set-favorites')]
    public function setSeachFavorites($favorites)
    {
        $this->favorites = $favorites ? false : true;
    }

    #[On('set-containers')]
    public function setSearchContainers($container)
    {
        $this->container = $container;
    }
}
