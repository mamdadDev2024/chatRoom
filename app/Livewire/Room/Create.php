<?php

namespace App\Livewire\Room;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate("required|min:6|string|unique:rooms")]
    public $title;
    #[Validate("required|stirng|min:15")]
    public $desc;
    #[Validate("required|image|max:5000")]
    public $image;
    public function updatedProperty($propertyName)
    {
        return $this->validateOnly($propertyName);
    }
    public function createRoom()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.room.create');
    }
}
