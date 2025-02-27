<?php

namespace App\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Update extends Component
{
    public Room $Room;
    
    public function updatedProperty($propertyName)
    {
        return $this->validateOnly($propertyName);
    }
    public function updateRoom()
    {
        $this->validate();
        
    }
    public function render()
    {
        return view('livewire.room.update');
    }
}
