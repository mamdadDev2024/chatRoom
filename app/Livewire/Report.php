<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("گزارش")]
class Report extends Component
{
    public function render()
    {
        return view('livewire.report');
    }
}
