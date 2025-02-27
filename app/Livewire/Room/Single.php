<?php

namespace App\Livewire\Room;

use App\Models\Room;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Single extends Component
{
    public Room $Room;
    public function subscribe()
    {
        if (auth()->check()) {
            Auth::user()->registeredRooms()->attach($this->room);            
        }else {
            return $this->redirectRoute("login" ,navigate:true);
        }
    }
    public function render()
    {
        $this->Room->load(["user"])->loadCount(["messages" , "likes"]);
        return view('livewire.room.single');
    }
}
