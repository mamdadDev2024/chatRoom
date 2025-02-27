<header class="p-3 h-14 bg-white shadow-md rounded-lg flex items-center justify-between">
    <!-- دکمه ورود -->
    <a href="{{ route("login") }}" class="text-blue-500 hover:text-blue-600 transition font-semibold">ورود</a>

    <!-- منو اصلی -->
    <nav class="hidden md:flex gap-4 text-gray-700 text-sm">
        <a href="#" class="hover:text-blue-500 transition">تماس با ما</a>
        <a href="#" class="hover:text-blue-500 transition">دسته‌بندی</a>
        <a href="#" class="hover:text-blue-500 transition">کاربران برتر</a>
        <a href="#" class="hover:text-blue-500 transition">جست‌وجو</a>
        <a href="#" class="hover:text-blue-500 transition">داغ‌ترین‌ها</a>
        <a href="#" class="hover:text-blue-500 transition">گزارش</a>
        <a href="#" class="hover:text-blue-500 transition">راهنما</a>
    </nav>

    <!-- دکمه حالت شب -->
    <button class="bg-gray-200 text-gray-700 px-3 py-1 rounded-md hover:bg-gray-300 transition">
        حالت شب
    </button>

    <!-- دکمه منو برای موبایل -->
    <button class="md:hidden text-gray-700">
        ☰
    </button>
</header>
