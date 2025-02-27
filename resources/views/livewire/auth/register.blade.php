<form 
    wire:submit="register" 
    class="w-full max-w-2xl mt-28  mx-auto p-6 rounded-2xl shadow-lg bg-gradient-to-br from-purple-600 to-blue-600 hover:shadow-xl transition-shadow duration-300"
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

        <!-- Username Input -->
        <div class="flex flex-col gap-2">
            <label class="text-sm font-medium text-gray-200">نام کاربری</label>
            <input
                type="text"
                wire:model.lazy="username"
                class="w-full px-4 py-3 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 focus:ring-2 focus:ring-white focus:border-transparent placeholder-gray-200 transition-all"
                placeholder="نام مورد نظر خود را وارد کنید"
                autocomplete="username"
            >
            @error("username")
                <div class="flex items-center gap-2 mt-1 text-red-200 text-sm animate-pulse">
                    ❌ {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password Input -->
        <div class="flex flex-col gap-2" x-data="{ showPassword: false }">
            <label class="text-sm font-medium text-gray-200">رمز عبور</label>
            <div class="relative">
                <input
                    :type="showPassword ? 'text' : 'password'"
                    wire:model.lazy="password"
                    class="w-full px-4 py-3 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 focus:ring-2 focus:ring-white focus:border-transparent placeholder-gray-200 transition-all pr-10"
                    placeholder="••••••••"
                    autocomplete="new-password"
                >
                <button 
                    type="button" 
                    @click="showPassword = !showPassword"
                    class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-200 hover:text-white"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </button>
            </div>
            @error("password")
                <div class="flex items-center gap-2 mt-1 text-red-200 text-sm animate-pulse">
                    ❌ {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button 
            type="submit" 
            class="w-full py-3 px-6 bg-white/90 hover:bg-white text-purple-900 font-semibold rounded-lg transition-all duration-200 flex items-center justify-center gap-2"
        >
            <span wire:loading.remove>ثبت نام</span>
            <span wire:loading class="flex items-center gap-2">
                <span class="animate-spin">🌀</span>
                در حال ثبت نام...
            </span>
            <svg wire:loading.remove class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
            </svg>
        </button>

        <!-- Additional Links -->
        <div class="text-center pt-4 border-t border-white/20">
            <a 
                href="{{ route('login') }}" 
                class="text-sm text-white/80 hover:text-white transition-colors"
            >
                قبلا ثبت نام کرده‌اید؟ وارد شوید
            </a>
        </div>
    </div>
</form>