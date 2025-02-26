<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate("Required|email|unique:users")]
    public $email;
    #[Validate("required|string|min:4|max:50")]
    public $username;
    #[Validate("required|string|min:6|max:60")]
    public $password;
    public $password_confirmation;
    
    public function updatedProperty($propertyName)
    {
        return $this->validateOnly($propertyName);
    }

    public function register()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
