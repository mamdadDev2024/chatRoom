<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Room;

class RoomForm extends Form
{
    #[Validate("required|min:6|string|unique:rooms,title")]
    public $title;

    #[Validate("nullable|string|min:10")]
    public $desc;

    #[Validate("nullable|file|mimes:jpg,png,pdf|max:2048")]
    public $file_name;

    public $roomId = null;

    public function update()
    {
        $this->validate();

        $room = Room::findOrFail($this->roomId);

        $room->title = $this->title;
        $room->desc = $this->desc;

        if ($this->file_name) {
            $path = $this->file_name->store('rooms', 'public');
            $room->file_name = $path;
        }

        $room->save();

        session()->flash('message', 'Room updated successfully.');
    }

    public function create()
    {
        $this->validate();

        $room = new Room();
        $room->title = $this->title;
        $room->desc = $this->desc;

        if ($this->file_name) {
            $path = $this->file_name->store('rooms', 'public');
            $room->file_name = $path;
        }

        $room->save();

        session()->flash('message', 'Room created successfully.');
    }

    public function mount($roomId = null)
    {
        if ($roomId) {
            $room = Room::find($roomId);
            if ($room) {
                $this->roomId = $room->id;
                $this->title = $room->title;
                $this->desc = $room->desc;
                $this->file_name = $room->file_name;
            }
        }
    }
}
