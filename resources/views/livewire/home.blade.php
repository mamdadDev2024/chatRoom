<div>
    @foreach ($rooms as $room)
        <div class=" rounded-2xl max-w-3xs max-h-96">
            <h2>{{ $room->title }}</h2>
            <p>Posted by: {{ $room->user->name }}</p>
            <p>Likes: {{ $room->likes_count }}</p>
            <p>Messages: {{ $room->messages_count }}</p>
        </div>
    @endforeach

    {{ $rooms->links() }}
</div>