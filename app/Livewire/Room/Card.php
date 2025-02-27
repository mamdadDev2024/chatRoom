<?php

namespace App\Livewire\Room;

use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Card extends Component
{
    public Room $room;

    public function subscribe()
    {
        Auth::user()->registeredRooms()->attach($this->room);
    }

    public function mount(Room $room)
    {
        $this->room = $room->load(['user'])->loadCount(['likes', 'messages']);
    }

    public function render()
    {
        return view('livewire.room.card');
    }
}
