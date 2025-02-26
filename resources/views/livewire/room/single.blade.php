<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <!-- Image Section -->
    <img 
        src="{{ $Room->file_name }}" 
        alt="{{ $Room->title }}" 
        class="w-full h-48 object-cover rounded-t-lg"
    >
    
    <!-- Content Section -->
    <div class="p-4 space-y-3">
        <h3 class="text-xl font-semibold text-gray-800">{{ $Room->title }}</h3>
        <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">{{ $Room->desc }}</p>
        
        <!-- Stats Section -->
        <div class="grid grid-cols-3 gap-2 pt-3 border-t border-gray-100">
            <div class="text-center p-1">
                <p class="font-medium text-gray-700">{{ $Room->likes_count }}</p>
                <span class="text-xs text-gray-500">Likes</span>
            </div>
            
            <div class="text-center p-1">
                <p class="font-medium text-gray-700">{{ $Room->messages_count }}</p>
                <span class="text-xs text-gray-500">Messages</span>
            </div>
            
            <div class="text-center p-1">
                <p class="font-medium text-gray-700 truncate">{{ $Room->user->username }}</p>
                <span class="text-xs text-gray-500">User</span>
            </div>
        </div>
    </div>
</div>