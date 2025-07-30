<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tournament;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mlbbTournament = Tournament::where('name', 'MLBB National Cup 2025')->first();
        $valoTournament = Tournament::where('name', 'Valorant Clash 2025')->first();

        Team::insert([
            ['tournament_id' => $mlbbTournament->id, 'name' => 'EVOS MLBB', 'region' => 'Jakarta'],
            ['tournament_id' => $mlbbTournament->id, 'name' => 'RRQ MLBB', 'region' => 'Bandung'],
            ['tournament_id' => $valoTournament->id, 'name' => 'BOOM Valorant', 'region' => 'Surabaya'],
        ]);
    }

}
