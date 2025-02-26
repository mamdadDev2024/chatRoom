<form wire:submit="updateRoom">
    <div>
        <label>عنوان</label>
        <input type="text" wire:model="title">
        @error("title")
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label>عنوان</label>
        <input type="text" wire:model="title">
        @error("title")
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label>عنوان</label>
        <input type="text" wire:model="title">
        @error("title")
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label>عنوان</label>
        <input type="text" wire:model="title">
        @error("title")
            <span>{{ $message }}</span>
        @enderror
    </div>
    <button>به روز رسانی</button>
</form>