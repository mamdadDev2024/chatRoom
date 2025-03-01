<?php

namespace App\Livewire\Room;

use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Validate("required|min:6|string|unique:rooms")]
    public $title;
    #[Validate("required|string|min:15")]
    public $desc;
    #[Validate("required|image|max:5000")]
    public $file_name;
    public function updatedProperty($propertyName)
    {
        return $this->validateOnly($propertyName);
    }
    public function createRoom()
    {
        $this->validate();
        $this->file_name = $this->file_name->storeAs("images","public");
        Auth::user()->registeredRooms()->create([
            $this->all()
        ]);
        $this->dispatch("roomAdded");
    }
    public function render()
    {
        return view('livewire.room.create');
    }
}
