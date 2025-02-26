<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate("required|email|exists:users")]
    public $email;
    #[Validate("required|string|min:6")]
    public $password;
    public function updatedProperty($propertyName)
    {
        return $this->validateOnly($propertyName);
    }
    public function login()
    {
        $this->validate();
        
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
