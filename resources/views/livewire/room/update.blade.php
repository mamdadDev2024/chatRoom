<form wire:submit.prevent="updateRoom" class="space-y-4 p-4 bg-white rounded-lg shadow-md max-w-md mx-auto">
    <!-- عنوان -->
    <div>
        <label class="block text-sm font-medium text-gray-700">عنوان</label>
        <input type="text" wire:model="title" class="w-full mt-1 p-2 border rounded-md">
        @error("title") <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>

    <!-- توضیحات -->
    <div>
        <label class="block text-sm font-medium text-gray-700">توضیحات</label>
        <textarea wire:model="desc" class="w-full mt-1 p-2 border rounded-md"></textarea>
        @error("desc") <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>

    <!-- تصویر -->
    <div>
        <label class="block text-sm font-medium text-gray-700">تصویر</label>
        <input type="file" wire:model="image" class="w-full mt-1 p-2 border rounded-md">
        @error("image") <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    </div>

    <!-- دکمه ارسال -->
    <button class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition">به‌روزرسانی</button>
</form>
