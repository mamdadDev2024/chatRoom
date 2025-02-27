<form wire:submit="createRoom" class="max-w-2xl mx-auto bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
    <div class="space-y-5">
        <!-- Title Input -->
        <div class="flex flex-col gap-2">
            <label class="text-sm font-medium text-gray-700">عنوان اتاق</label>
            <input 
                type="text" 
                wire:model.lazy="title"
                class="rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 px-4 py-2.5 text-sm transition-all placeholder-gray-400"
                placeholder="عنوان جذابی انتخاب کنید"
            >
            @error("title")
                <p class="text-red-600 text-xs font-medium mt-1 animate-pulse">⚠️ {{ $message }}</p>
            @enderror
        </div>

        <!-- Description Input -->
        <div class="flex flex-col gap-2">
            <label class="text-sm font-medium text-gray-700">توضیحات کامل</label>
            <textarea 
                wire:model.lazy="desc"
                rows="4"
                class="rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 px-4 py-2.5 text-sm transition-all placeholder-gray-400"
                placeholder="جزئیات اتاق و قوانین آن را اینجا بنویسید"
            ></textarea>
            @error("desc")
                <p class="text-red-600 text-xs font-medium mt-1 animate-pulse">⚠️ {{ $message }}</p>
            @enderror
        </div>

        <!-- image Input -->
        <div class="flex flex-col gap-2">
            <label class="text-sm font-medium text-gray-700">تصویر گفتگو</label>
            <input
                type="file" 
                wire:model.lazy="file_name"
                rows="4"
                class="rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 px-4 py-2.5 text-sm transition-all placeholder-gray-400"
                placeholder="جزئیات اتاق و قوانین آن را اینجا بنویسید"
            >
            @error("file_name")
                <p class="text-red-600 text-xs font-medium mt-1 animate-pulse">⚠️ {{ $message }}</p>
            @enderror
        </div>



        <!-- Submit Button -->
        <div class="pt-4 border-t border-gray-100">
            <button 
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center gap-2"
            >
                <svg wire:loading.remove class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                <span wire:loading.remove>ایجاد اتاق جدید</span>
                <span wire:loading class="flex items-center gap-2">
                    <span class="animate-spin">🌀</span>
                    در حال ایجاد...
                </span>
            </button>
        </div>
    </div>
</form>