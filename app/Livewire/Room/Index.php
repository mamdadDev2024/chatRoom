<?php

namespace App\Livewire\Room;

use App\Models\Room;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title("لیست گفتگو ها")]
class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $rooms = Room::with("user")->withCount("messages" , "likes")->paginate(20);
        return view('livewire.room.index' , ["rooms" => $rooms]);
    }
}
