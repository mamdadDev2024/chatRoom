<div class="max-w-lg mx-auto bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <!-- Image Section -->
    <img 
        src="{{ $Room->file_name }}" 
        alt="{{ $Room->title }}" 
        class="w-full h-48 object-cover rounded-t-lg"
    >
    
    <!-- Content Section -->
    <div class="p-4 space-y-3">
        <a href="{{ route('room.show', ['Room' => $Room->slug]) }}" class="text-xl font-semibold text-gray-800 hover:text-blue-500 transition">
            {{ $Room->title }}
        </a>
        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
            {{ $Room->desc }}
        </p>
        
        <!-- Stats Section -->
        <div class="grid grid-cols-3 gap-2 pt-3 border-t border-gray-100 text-gray-700">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <p class="font-medium">{{ $Room->likes_count }}</p>
                <span class="text-xs text-gray-500">Likes</span>
            </div>

            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M21 6h-2V3H5v3H3a1 1 0 00-1 1v12a1 1 0 001 1h18a1 1 0 001-1V7a1 1 0 00-1-1zm-2 12H5V9h14v9zm-7-4h2v2h-2zm0-4h2v2h-2zm4 4h2v2h-2zm0-4h2v2h-2z"/>
                </svg>
                <p class="font-medium">{{ $Room->messages_count }}</p>
                <span class="text-xs text-gray-500">Messages</span>
            </div>

            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.33 0-10 1.67-10 5v2h20v-2c0-3.33-6.67-5-10-5z"/>
                </svg>
                <p class="font-medium truncate">{{ $Room->user->username }}</p>
                <span class="text-xs text-gray-500">User</span>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-4 flex justify-between gap-3">
            <button wire:click="subscribe" class="w-1/2 text-center text-sm font-semibold text-white bg-blue-500 hover:bg-blue-600 transition py-2 rounded-lg">
                عضویت
            </button>
            <a href="{{ route('room.show', ['Room' => $Room->slug]) }}" class="w-1/2 text-center text-sm font-semibold text-blue-500 border border-blue-500 hover:bg-blue-100 transition py-2 rounded-lg">
                بیشتر
            </a>
        </div>
    </div>
</div>
