<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title("جست و جو")]
class Search extends Component
{
    public function render()
    {
        return view('livewire.search');
    }
}
