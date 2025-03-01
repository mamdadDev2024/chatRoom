<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("راهنمایی")]
class Help extends Component
{
    public function render()
    {
        return view('livewire.help');
    }
}
