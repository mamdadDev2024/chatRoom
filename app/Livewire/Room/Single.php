<?php

namespace App\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Single extends Component
{
    public Room $Room;
    public function render()
    {
        $this->Room->load(["user"])->loadCount(["messages" , "likes"]);
        return view('livewire.room.single');
    }
}
