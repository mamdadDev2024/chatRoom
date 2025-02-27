<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Room;  // Assuming you have a Room model
use Illuminate\Support\Facades\Storage;  // For handling file uploads

class RoomForm extends Form
{
    #[Validate("required|min:6|string|unique:rooms,title")]
    public $title;

    #[Validate("nullable|string|min:10")]
    public $desc;

    #[Validate("nullable|file|mimes:jpg,png,pdf|max:2048")]
    public $file_name;

    public $roomId = null; // Used for editing an existing room

    // Update method for handling form submission when editing
    public function update()
    {
        // Validation
        $this->validate();

        // Find the room by ID
        $room = Room::findOrFail($this->roomId);

        // Update the room details
        $room->title = $this->title;
        $room->desc = $this->desc;

        // Handle file upload (if provided)
        if ($this->file_name) {
            // Upload the file and get its path
            $path = $this->file_name->store('rooms', 'public');
            $room->file_name = $path; // Save the file path
        }

        // Save the updated room data
        $room->save();

        session()->flash('message', 'Room updated successfully.');
    }

    // Create method for handling form submission when creating a new room
    public function create()
    {
        // Validation
        $this->validate();

        // Create a new room
        $room = new Room();
        $room->title = $this->title;
        $room->desc = $this->desc;

        // Handle file upload (if provided)
        if ($this->file_name) {
            // Upload the file and get its path
            $path = $this->file_name->store('rooms', 'public');
            $room->file_name = $path; // Save the file path
        }

        // Save the new room data
        $room->save();

        session()->flash('message', 'Room created successfully.');
    }

    // To allow for editing, you can load the existing room data by ID
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
