<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                Game::insert([
            ['name' => 'Mobile Legends', 'description' => 'MOBA 5v5 by Moonton'],
            ['name' => 'Valorant', 'description' => 'FPS tactical shooter by Riot'],
            ['name' => 'PUBG Mobile', 'description' => 'Battle Royale by Tencent'],
        ]);
    }

}
