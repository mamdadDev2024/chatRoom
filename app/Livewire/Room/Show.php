<?php

namespace App\Livewire\Room;

use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title("تالار گفتگو")]
class Show extends Component
{
    #[Validate("required|min:1|string")]
    public $message;
    public function newMessage()
    {
        $this->validate();
    }
    public function leaveRoom()
    {
        Auth::user()->registeredRooms()->detach($this->Room->id);
    }
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
