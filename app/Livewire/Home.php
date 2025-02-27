<?php
namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    
    public function render()
    {
        $rooms = Room::limit(40)->with('user')
                     ->withCount('likes', 'messages')
                     ->paginate(10);
    
        return view('livewire.home', ['rooms' => $rooms]);
    }
}