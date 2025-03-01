<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Message;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(5) // Reduced the number of users
            ->has(
                Room::factory()
                    ->count(rand(3, 4)) // Reduced the number of rooms per user
                    ->has(
                        Like::factory()
                            ->count(rand(50, 100)) // Reduced the number of likes
                            ->state(function (array $attributes, Room $room) {
                                return ['user_id' => $room->user_id];
                            })
                    )
                    ->has(
                        Message::factory()
                            ->count(rand(100, 200)) // Reduced the number of messages
                            ->state(function (array $attributes, Room $room) {
                                return ['user_id' => $room->user_id];
                            })
                    )
            )
            ->create();
    }
}
