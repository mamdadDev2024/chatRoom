<?php
namespace App\Livewire\Room;

use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Card extends Component
{
    public $room;

    public function mount(Room $room)
    {
        $this->room = Room::withCount(['likes', 'messages'])->findOrFail($room->id);
    }

    public function subscribe()
    {
        Auth::user()->registeredRooms()->attach($this->room);
        $this->dispatch("notify" , [
            "type" => "success",
            "message" => "شما در گفتگو عضو شدید"
        ]);
        $this->room = Room::withCount(['likes', 'messages'])->findOrFail($this->room->id);
    }



    public function render()
    {
        return view('livewire.room.card', [
            'room' => $this->room
        ]);
    }
}
