<form 
    wire:submit="login" 
    class="w-full max-w-2xl mt-28 mx-auto p-6 rounded-2xl shadow-lg bg-gradient-to-br from-blue-600 to-purple-600 hover:shadow-xl transition-shadow duration-300"
>
    <div class="space-y-6 text-white">
        <!-- Email Input -->
        <div class="flex flex-col gap-2">
            <label class="text-sm font-medium text-gray-200">آدرس ایمیل</label>
            <input
                type="email"
                wire:model.lazy="email"
                class="w-full px-4 py-3 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 focus:ring-2 focus:ring-white focus:border-transparent placeholder-gray-200 transition-all"
                placeholder="example@domain.com"
                autocomplete="email"
            >
            @error("email")
                <div class="flex items-center gap-2 mt-1 text-red-200 text-sm animate-pulse">
                    ❌ {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password Input -->
        <div class="flex flex-col gap-2">
            <label class="text-sm font-medium text-gray-200">رمز عبور</label>
            <input
                type="password"
                wire:model.lazy="password"
                class="w-full px-4 py-3 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 focus:ring-2 focus:ring-white focus:border-transparent placeholder-gray-200 transition-all"
                placeholder="••••••••"
                autocomplete="current-password"
            >
            @error("password")
                <div class="flex items-center gap-2 mt-1 text-red-200 text-sm animate-pulse">
                    ❌ {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button
            type="submit"
            class="w-full py-3 px-6 bg-white/90 hover:bg-white text-blue-900 font-semibold rounded-lg transition-all duration-200 flex items-center justify-center gap-2"
        >
            <span wire:loading.remove wire:target="login">ورود به حساب</span>
            <span wire:loading wire:target="login" class="flex items-center gap-2">
                <span class="animate-spin">🌀</span>
                در حال ورود...
            </span>
            <svg wire:loading.class="opacity-0" wire:target="login" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>

        </button>


        <!-- Additional Links -->
        <div class="text-center pt-4 border-t border-white/20">
            <a 
                href="{{ route('register') }}" 
                class="text-sm text-white/80 hover:text-white transition-colors"
            >
                حساب کاربری ندارید؟ ثبت نام کنید
            </a>
        </div>
    </div>
</form>