<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    
    public function updatedProperty($propertyName)
    {
        return $this->validateOnly($propertyName);
    }

    public function register()
    {
        $this->validate();
        $user = User::create($this->all());
        Auth::login($user);
        $this->dispatch("authRegistered");
        return $this->redirectRoute("home" , navigate:true);
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
