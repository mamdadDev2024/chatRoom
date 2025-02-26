<?php

namespace App\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Single extends Component
{
    public Room $Room;
    public function render()
    {
        return view('livewire.room.single');
    }
}
