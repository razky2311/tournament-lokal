<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tournament;
use App\Models\Game;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mlbb = Game::where('name', 'Mobile Legends')->first();
        $valo = Game::where('name', 'Valorant')->first();

        Tournament::insert([
            [
                'game_id' => $mlbb->id,
                'name' => 'MLBB National Cup 2025',
                'description' => 'Turnamen nasional MLBB tingkat universitas',
                'start_date' => '2025-08-10',
                'end_date' => '2025-08-20',
            ],
            [
                'game_id' => $valo->id,
                'name' => 'Valorant Clash 2025',
                'description' => 'Turnamen lokal Valorant antar kota',
                'start_date' => '2025-09-01',
                'end_date' => '2025-09-10',
            ],
        ]);
    }

}
