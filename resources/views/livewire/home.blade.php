<div class="max-w-11/12 mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6">
        @foreach ($rooms as $room)
            @livewire("room.card" , ["room" => $room] , key($room->id))
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