<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Message;
use App\Models\Room;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()
        ->count(10)
        ->has(
            Room::factory()
                ->count(3)
                ->has(
                    Like::factory()
                        ->count(1)
                        ->state(function (array $attributes, Room $room) {
                            return ['user_id' => $room->user_id];
                        })
                )
                ->has(
                    Message::factory()
                        ->count(100)
                        ->state(function (array $attributes, Room $room) {
                            return ['user_id' => $room->user_id];
                        })
                )
        )
        ->create();
    
    
    }
}
