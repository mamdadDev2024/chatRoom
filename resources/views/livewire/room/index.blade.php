<!-- Enhanced Room List Component -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Create Room Section -->
    <div class="mb-10 bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 border border-gray-100">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">اتاق جدید بسازید</h2>
        @livewire('room.create')
    </div>

    <!-- Rooms Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Loading State -->
        <div wire:loading.class.remove="hidden" class="hidden col-span-full">
            <div class="animate-pulse bg-white rounded-xl p-6 shadow-md">
                <div class="h-4 bg-gray-200 rounded w-1/3 mb-4"></div>
                <div class="h-32 bg-gray-100 rounded-lg mb-4"></div>
                <div class="space-y-2">
                    <div class="h-3 bg-gray-200 rounded w-full"></div>
                    <div class="h-3 bg-gray-200 rounded w-4/5"></div>
                </div>
            </div>
        </div>

        <!-- Rooms List -->
        <div wire:loading.class="hidden" class="col-span-full">
            @if($rooms->isEmpty())
                <!-- Empty State -->
                <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                    <div class="max-w-xs mx-auto mb-6">
                        <svg class="w-full text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">هیچ اتاقی یافت نشد!</h3>
                    <p class="text-gray-500">اولین نفری باشید که اتاق میسازد</p>
                </div>
            @else
                <!-- Rooms Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($rooms as $room)
                        @livewire('room.card', ['room' => $room], key($room->id))
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($rooms->hasPages())
                    <div class="mt-8 bg-white rounded-lg shadow-sm p-4">
                        {{ $rooms->links() }}
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>