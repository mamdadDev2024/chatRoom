<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate; // برای مجوزدهی
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public UserForm $form;
    public ?User $user = null;

    public function mount()
    {
        $this->user = Auth::user();

        if (!$this->user) {
            abort(403, 'شما مجاز به دسترسی به این صفحه نیستید.');
        }
        $this->form->setUser($this->user);
    }

    public function updateProfile()
    {
        try {
            Gate::authorize('update', $this->user);

            $this->form->update();

            $this->dispatch('notify', [
                'type' => 'success',
                'message' => 'پروفایل با موفقیت به‌روزرسانی شد'
            ]);

            $this->dispatch('profile-updated');

        } catch (\Throwable $e) {
            $this->dispatch('notify', [
                'type' => 'error',
                'message' => 'خطا در به‌روزرسانی: '
            ]);
        }
    }

    public function render()
    {
        return view('livewire.user.profile');
    }
}
