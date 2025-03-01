<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("دسته بندی ها")]
class Category extends Component
{
    public function render()
    {
        return view('livewire.category');
    }
}
