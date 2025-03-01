<?php

namespace App\Livewire\Room;

use App\Livewire\Forms\RoomForm;
use App\Models\Room;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("به روز رسانی گفتگو")]
class Update extends Component
{
    public Room $Room;
    public RoomForm $form;
    public function updatedProperty($propertyName)
    {
        return $this->validateOnly($propertyName);
    }
    public function updateRoom()
    {
        $this->form->update();
        
    }
    public function render()
    {
        return view('livewire.room.update');
    }
}
