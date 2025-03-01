<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class UserForm extends Form
{
    public User $user;

    #[Rule('required|min:3|max:50|unique:users,name,{user.id}')]
    public string $username;

    #[Rule('required|email|unique:users,email,{user.id}')]
    public string $email;

    #[Rule('nullable|max:500')]
    public ?string $bio = null;

    #[Rule('nullable|image|max:2048')]
    public $file_name;

    public function setUser(User $user)
    {
        $this->user = $user;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->bio = $user->bio;
    }

    public function update()
    {
        $this->validate();

        $data = [
            'username' => $this->username,
            'email' => $this->email,
            'bio' => $this->bio,
        ];

        if ($this->file_name) {
            $data['file_name'] = $this->file_name->store('avatars', 'public');
        }

        $this->user->update($data);
    }
}