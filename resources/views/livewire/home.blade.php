<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($rooms as $room)
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 p-6 border border-gray-700 hover:border-blue-400 group">
                <div class="mb-4">
                    <a href="{{ route("room.show" , ["Room" => $room->slug]) }}" class="text-xl font-bold block text-blue-400 group-hover:text-blue-300 transition-colors">
                        {{ $room->title }}
                    </a>
                    <a href="#" class="text-sm text-gray-300 hover:text-white transition-colors">
                        @ {{ $room->user->username }}
                    </a>
                </div>
                <div class="flex justify-between items-center text-sm border-t border-gray-700 pt-4">
                    <div class="flex items-center gap-1 text-green-400">
                        <span class="text-lg">❤️</span>
                        <span>{{ $room->likes_count }}</span>
                    </div>
                    
                    <div class="flex items-center gap-1 text-purple-400">
                        <span class="text-lg">💬</span>
                        <span>{{ $room->messages_count }}</span>
                    </div>

                    <div class="text-gray-400 text-xs">
                        {{ $room->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if($rooms->hasPages())
        <div class="mt-8 bg-gray-800 rounded-lg p-4 shadow-lg">
            {{ $rooms->onEachSide(1)->links('vendor.livewire.tailwind', [
                'style' => 'custom',
                'active_class' => 'bg-blue-600 text-white',
                'page_class' => 'bg-gray-700 text-gray-300 hover:bg-gray-600'
            ]) }}
        </div>
    @endif
    @if($rooms->isEmpty())
        <div class="bg-gray-800 rounded-2xl p-8 text-center border border-dashed border-gray-600">
            <div class="text-6xl mb-4 text-gray-500">🏠</div>
            <h3 class="text-xl text-gray-300 mb-2">هیچ اتاقی یافت نشد!</h3>
            <p class="text-gray-500">اولین نفری باشید که اتاق میسازد</p>
        </div>
    @endif
</div>