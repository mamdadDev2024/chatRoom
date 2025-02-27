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
                ->count(rand(3 , 10))
                ->has(
                    Like::factory()
                        ->count(rand(60 , 500))
                        ->state(function (array $attributes, Room $room) {
                            return ['user_id' => $room->user_id];
                        })
                )
                ->has(
                    Message::factory()
                        ->count(rand(132 , 62333))
                        ->state(function (array $attributes, Room $room) {
                            return ['user_id' => $room->user_id];
                        })
                )
        )
        ->create();
    
    
    }
}
