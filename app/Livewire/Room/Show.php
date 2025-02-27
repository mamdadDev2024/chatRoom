<?php

namespace App\Livewire\Room;

use App\Models\Room;
use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public Room $Room;
    public $onlineUsers;
    public function mount()
    {
        $this->onlineUsers = User::all();
    }
    public function render()
    {
        return view('livewire.room.show');
    }
}
