@props(['room'])
<!-- Modern Room Card Component -->
<div class="max-w-xs mx-auto bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden group border border-gray-100 hover:border-gray-200 h-full flex flex-col">
    <!-- Image Section -->
    <div class="relative overflow-hidden">
        <img 
            src="{{ $room->file_name }}" 
            alt="{{ $room->title }}"
            class="w-full h-48 object-cover transform group-hover:scale-105 transition-transform duration-300"
        >
    </div>
    
    <!-- Content Section -->
    <div class="p-4 flex-1 flex flex-col">
        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition-colors">
            {{ $room->title }}
        </h3>
        
        <div class="flex-1">
            <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-3">
                {{ $room->desc }}
            </p>
        </div>

        <!-- Stats Footer -->
        <div class="mt-auto pt-2 border-t border-gray-100">
            <div class="flex justify-between text-sm text-gray-500">
                <div class="flex items-center space-x-1">
                    <span class="hover:text-red-500 transition-colors">
                        ❤️ {{ $room->likes_count }}
                    </span>
                </div>
                
                <div class="flex items-center space-x-1">
                    <span class="hover:text-green-600 transition-colors">
                        💬 {{ $room->messages_count }}
                    </span>
                </div>
                
                <div class="flex items-center space-x-1 truncate">
                    <span class="hover:text-purple-600 transition-colors">
                        👤 {{ Str::limit($room->user->username, 12) }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>