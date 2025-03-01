<header x-data="isDark= false" class="p-3 h-14 bg-white shadow-md rounded-lg flex items-center justify-between">

@auth
<a href="{{ route("user.profile") }}" class="text-blue-500 hover:text-blue-600 transition font-semibold">پروفایل</a>

@else
<a href="{{ route("login") }}" class="text-blue-500 hover:text-blue-600 transition font-semibold">ورود</a>

@endauth


    <nav class="hidden md:flex gap-4 text-gray-700 text-sm">
        <a href="#" class="hover:text-blue-500 transition">تماس با ما</a>
        <a href="#" class="hover:text-blue-500 transition">دسته‌بندی</a>
        <a href="#" class="hover:text-blue-500 transition">کاربران برتر</a>
        <a href="#" class="hover:text-blue-500 transition">جست‌وجو</a>
        <a href="#" class="hover:text-blue-500 transition">داغ‌ترین‌ها</a>
        <a href="#" class="hover:text-blue-500 transition">گزارش</a>
        <a href="#" class="hover:text-blue-500 transition">راهنما</a>
    </nav>

    <button 
        @click="isDark = ! isDark"
        class=" p-2 rounded-full bg-white dark:bg-gray-800 shadow-lg transition-colors duration-300"
    >
        <span x-show="!isDark">🌙</span>
        <span x-show="isDark" class="text-yellow-400">☀️</span>
    </button>


    <button class="md:hidden text-gray-700">
        ☰
    </button>
</header>
