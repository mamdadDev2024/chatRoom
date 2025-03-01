<div class="max-w-3xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-lg transition-all duration-300">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-8 border-b pb-4 border-gray-200 dark:border-gray-700">
        پروفایل کاربری
    </h2>

    <form wire:submit.prevent="updateProfile" class="space-y-6">
        <!-- Username Input -->
        <div class="relative">
            <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                نام کاربری
                <span class="text-red-500">*</span>
            </label>
            <input 
                type="text" 
                id="username" 
                wire:model.lazy="username"
                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:focus:ring-blue-400 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-200 placeholder-gray-400 transition-all"
                placeholder="نام کاربری خود را وارد کنید"
            >
            @error('username')
                <div class="flex items-center gap-2 mt-2 text-red-600 dark:text-red-400 text-sm animate-pulse">
                    ❌ {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Email Input -->
        <div class="relative">
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                آدرس ایمیل
                <span class="text-red-500">*</span>
            </label>
            <input 
                type="email" 
                id="email" 
                wire:model.lazy="email"
                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:focus:ring-blue-400 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-200 placeholder-gray-400 transition-all"
                placeholder="example@domain.com"
            >
            @error('email')
                <div class="flex items-center gap-2 mt-2 text-red-600 dark:text-red-400 text-sm animate-pulse">
                    ❌ {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Bio Textarea -->
        <div class="relative">
            <label for="bio" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                بیوگرافی
            </label>
            <textarea 
                id="bio" 
                wire:model.lazy="bio"
                rows="4"
                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:focus:ring-blue-400 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-200 placeholder-gray-400 transition-all"
                placeholder="درباره خودتان بنویسید..."
            ></textarea>
            @error('bio')
                <div class="flex items-center gap-2 mt-2 text-red-600 dark:text-red-400 text-sm animate-pulse">
                    ❌ {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Avatar Upload -->
        <div class="relative">
            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                تصویر پروفایل
            </label>
            <div class="flex items-center gap-4">
                <div class="relative group">
                    <label class="cursor-pointer">
                        <input 
                            type="file" 
                            id="image" 
                            wire:model="file_name"
                            class="hidden"
                            accept="image/*"
                        >
                        <div class="w-20 h-20 rounded-full bg-gray-100 dark:bg-gray-600 flex items-center justify-center overflow-hidden border-2 border-dashed border-gray-300 dark:border-gray-500 group-hover:border-blue-500 transition-colors">
                            @if($user->file_name)
                                <img src="{{ $user->file_name->temporaryUrl() }}" class="w-full h-full object-cover">
                            @else
                                <svg class="w-8 h-8 text-gray-400 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            @endif
                        </div>
                    </label>
                </div>
                <span class="text-sm text-gray-500 dark:text-gray-400">حداکثر سایز: 2MB</span>
            </div>
            @error('file_name')
                <div class="flex items-center gap-2 mt-2 text-red-600 dark:text-red-400 text-sm animate-pulse">
                    ❌ {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="pt-6 border-t border-gray-200 dark:border-gray-700">
            <button 
                type="submit" 
                wire:loading.attr="disabled"
                class="w-full py-3 px-6 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2"
            >
                <span wire:loading.remove>ذخیره تغییرات</span>
                <span wire:loading class="flex items-center gap-2">
                    <span class="animate-spin">🌀</span>
                    در حال ذخیره...
                </span>
            </button>
        </div>
    </form>
</div>