<form wire:submit="createRoom" class=" rounded-lg shadow-lg bg-">
    <div class=" flex flex-col gap-3 ">
        <label>عنوان</label>
        <input type="text" wire:model.lazy="title">
        @error("title")
        <span>{{ $message }}</span>
        @enderror
    </div>
    <div class=" flex flex-col gap-3 ">
        <label>توضیحات</label>
        <input type="text" wire:model.lazy="desc">
        @error("desc")
        <span>{{ $message }}</span>
        @enderror
    </div>
</form>