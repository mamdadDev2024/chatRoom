<?php

namespace App\Livewire\Room;

use App\Models\Room;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title("جزئیات گفتگو")]
class Single extends Component
{
    public Room $Room;
    public function subscribe()
    {
        if (Auth::check()) {
            Auth::user()->registeredRooms()->attach($this->Room);            
            $this->dispatch("notify" , [
                "type" => "success",
                "message" => "شما در گفتگو عضو شدید"
            ]);
        }else {
            $this->dispatch("notify" , [
                "type" => "error",
                "message" => "شما در گفتگو عضو نشدید"
            ]);
            return $this->redirectRoute("login" ,navigate:true);
        }
    }
    public function render()
    {
        $this->Room->load(["user"])->loadCount(["messages" , "likes"]);
        return view('livewire.room.single');
    }
}
