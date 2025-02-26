<form wire:submit="regsiter" class=" flex justify-center w-full max-w-4xl flex-col gap-4 p-3 rounded-xl border bg-gradient-to-r from-gray-600 to-gray-800">
    <div class=" flex flex-col gap-3 ">
        <label>ایمیل</label>
        <input type="text" wire:model.lazy="email">
        @error("email")
        <span>{{ $message }}</span>
        @enderror
    </div>
    <div class=" flex flex-col gap-3 ">
        <label>نام کاربری</label>
        <input type="text" wire:model.lazy="username">
        @error("username")
        <span>{{ $message }}</span>
        @enderror
    </div>
    <div class=" flex flex-col gap-3 ">
        <label>رمز عبور</label>
        <input type="password" wire:model.lazy="password">
        @error("password")
        <span>{{ $message }}</span>
        @enderror
    </div>
    <button>ورود</button>
</form>