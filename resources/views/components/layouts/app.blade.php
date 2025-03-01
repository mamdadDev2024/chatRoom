@props(['title' => 'گفتگو', 'description' => 'پلتفرم گفتگوی آنلاین'])

<!DOCTYPE html>
<html 
    x-data="{ darkMode: false }" :class="{'dark': darkMode}"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
    dir="rtl"
    class="scroll-smooth"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="{{ $description }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title . ' | ' . config('app.name') }}</title>
    @stack('scripts')
</head>

<body class=" font-vasir bg-gray-50 antialiased rtl:text-right min-h-screen flex flex-col">
    <div id="global-loader" class="fixed inset-0 bg-white z-[9999] flex items-center justify-center transition-opacity duration-300">
        <div class="animate-pulse flex items-center gap-2 text-gray-600">
            <div class="w-8 h-8 bg-blue-600 rounded-full animate-bounce"></div>
            <span class="font-medium">در حال بارگذاری...</span>
        </div>
    </div>

    <x-header/>

    <!-- Main Content -->
    <main class="flex-1">
        {{ $slot }}
    </main>

    <!-- Footer Section -->
    @isset($footer)
        <footer class="mt-auto border-t border-gray-100 bg-white">
            {{ $footer }}
        </footer>
    @endisset

    @livewireScripts

    <script>
        document.addEventListener('DOMContentLoaded', hideLoader);
        document.addEventListener('turbo:load', hideLoader);
        document.addEventListener('livewire:navigated', hideLoader);

        function hideLoader() {
            const loader = document.getElementById('global-loader');
            if (loader) {
                loader.classList.add('opacity-0', 'pointer-events-none');
                setTimeout(() => loader.remove(), 500);
            }
        }
    </script>
</body>
</html>
