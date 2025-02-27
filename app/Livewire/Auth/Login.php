<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
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
        if(Auth::attempt($this->only(["email" , "password"]) , true))
        {
            $this->dispatch("authLogedin");
            return $this->redirectRoute("home" , navigate:true);
        }
        
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
