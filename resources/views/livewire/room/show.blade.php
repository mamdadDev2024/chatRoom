<div x-data="{ darkMode: $persist(false) }" class="flex bg-gray-100 dark:bg-gray-900 transition-colors duration-300 min-h-screen">
    <!-- Theme Toggle -->
    <button @click="darkMode = !darkMode" class="fixed top-4 right-4 z-50 p-2 rounded-full bg-white dark:bg-gray-800 shadow-lg">
        <span x-show="!darkMode">🌙</span>
        <span x-show="darkMode" class="text-yellow-400">☀️</span>
    </button>

    <!-- Sidebar -->
    <aside class="w-1/4 bg-white dark:bg-gray-800 shadow-md p-4 overflow-y-auto border-r border-gray-200 dark:border-gray-700">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">جزئیات گفتگو</h2>
        <p class="text-sm text-gray-600 dark:text-gray-400 bg-gray-50 dark:bg-gray-700 p-3 rounded-lg">{{ $Room->desc }}</p>
        <h3 class="text-md font-semibold text-gray-800 dark:text-gray-300 mt-4">کاربران آنلاین</h3>
        <ul class="space-y-2">
            @foreach($onlineUsers as $user)
            <li class="flex items-center space-x-2 p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                <span class="w-3 h-3 rounded-full bg-green-500"></span>
                <span class="text-sm text-gray-700 dark:text-gray-300">{{ $user->username }}</span>
            </li>
            @endforeach
        </ul>
    </aside>

    <!-- Chat Section -->
    <div class="flex-1 flex flex-col bg-white dark:bg-gray-800 shadow-md overflow-hidden" style="height: calc(100svh - 14rem);">
        <!-- Chat Header -->
        <div class="p-4 bg-blue-500 dark:bg-blue-600 text-white flex justify-between items-center">
            <h2 class="text-xl">{{ $Room->title }}</h2>
            <button wire:click="leaveRoom" class="px-4 py-2 bg-red-500 hover:bg-red-600 rounded-lg transition flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                خروج
            </button>
        </div>

        <!-- Messages List -->
        <div class="flex-1 p-4 overflow-y-auto space-y-4" x-data="{ scrollToBottom() { this.$el.scrollTop = this.$el.scrollHeight } }" x-init="scrollToBottom()" wire:poll.keep-alive>
            @foreach($Room->messages as $message)
            <div class="flex @if($message->user_id == auth()->id()) justify-end @endif">
                <div class="p-3 max-w-xs rounded-lg shadow-md relative"
                    :class="$message->user_id == auth()->id() 
                            ? 'bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200' 
                            : 'bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200'">
                    
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-xs font-medium text-gray-600 dark:text-gray-300">
                            {{ $message->user->username }}
                        </span>
                        <span class="text-[8px] text-gray-500 dark:text-gray-400 absolute bottom-0 left-1">
                            {{ $message->created_at->format('H:i') }}
                        </span>
                    </div>

                    <p class="text-sm">{{ $message->content }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Message Input -->
        <form class="p-4 border-t dark:border-gray-700 sticky bottom-0 bg-gray-50 dark:bg-gray-900 flex items-center gap-2">
            <input wire:model="newMessage" type="text" class="flex-1 p-2.5 rounded-lg border dark:border-gray-600 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200 placeholder-gray-400 transition-all" placeholder="پیام خود را وارد کنید...">
            <button wire:click.prevent="sendMessage" class="px-5 py-2.5 bg-blue-500 hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700 text-white rounded-lg transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                </svg>
                ارسال
            </button>
        </form>
    </div>
</div>
