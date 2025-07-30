<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evos = Team::where('name', 'EVOS MLBB')->first();
        $rrq  = Team::where('name', 'RRQ MLBB')->first();
        $boom = Team::where('name', 'BOOM Valorant')->first();

        Player::insert([
            ['team_id' => $evos->id, 'name' => 'razky fadilah', 'nickname' => 'EVOS Razky', 'role' => 'Midlaner'],
            ['team_id' => $rrq->id, 'name' => 'Ferdian aziz', 'nickname' => 'RRQ Ferdi', 'role' => 'Tank'],
            ['team_id' => $boom->id, 'name' => 'Dimas Ramadhan', 'nickname' => 'BOOM Dimas', 'role' => 'Sniper'],
        ]);
    }

}
