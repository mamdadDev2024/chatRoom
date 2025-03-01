<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("داغ ترین ها")]
class Hotest extends Component
{
    public function render()
    {
        return view('livewire.hotest');
    }
}
