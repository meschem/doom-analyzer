<?php

namespace Database\Seeders;

use App\Models\Demon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Demon::create([
            'name' => 'Soldier',
            'aggression' => -0.5,
            'general_priority' => -0.75,
            'defense' => -0.75,
            'damage' => -0.5,
            'aerial_threat' => -0.5,
            'ranged_threat' => -0.5,
            'melee_threat' => -0.75,
            'weak_points' => 0,
            'speed' => -0.5,
            'area_denial' => -0.75
        ]);

        Demon::create([
            'name' => 'Imp',
            'aggression' => 0.5,
            'general_priority' => -0.75,
            'defense' => -0.75,
            'damage' => -0.5,
            'aerial_threat' => -0.5,
            'ranged_threat' => -0.5,
            'melee_threat' => -0.75,
            'weak_points' => 0,
            'speed' => 0,
            'area_denial' => -1
        ]);

        Demon::create([
            'name' => 'Shield Soldier',
            'aggression' => 0,
            'general_priority' => 0,
            'defense' => -0.25,
            'damage' => 0.5,
            'aerial_threat' => -1,
            'ranged_threat' => -1,
            'melee_threat' => 0.75,
            'weak_points' => 0,
            'speed' => -0.5,
            'area_denial' => 0.25
        ]);

        Demon::create([
            'name' => 'Arachnotron',
            'aggression' => 0,
            'general_priority' => -0.25,
            'defense' => 0,
            'damage' => 0,
            'aerial_threat' => -0.25,
            'ranged_threat' => 0,
            'melee_threat' => -0.25,
            'weak_points' => 1,
            'speed' => -0.25,
            'area_denial' => 0.5
        ]);

        Demon::create([
            'name' => 'Cacodemon',
            'aggression' => 0.75,
            'general_priority' => 0.75,
            'defense' => -0.5,
            'damage' => 0.75,
            'aerial_threat' => 0.75,
            'ranged_threat' => 0,
            'melee_threat' => 0.75,
            'weak_points' => 1,
            'speed' => 0.75,
            'area_denial' => 0
        ]);

        Demon::create([
            'name' => 'Hell Knight',
            'aggression' => 1,
            'general_priority' => 0.5,
            'defense' => 0,
            'damage' => 0.25,
            'aerial_threat' => -1,
            'ranged_threat' => -1,
            'melee_threat' => 0.75,
            'weak_points' => 0,
            'speed' => 0.75,
            'area_denial' => 0.25
        ]);

        Demon::create([
            'name' => 'Dread Knight',
            'aggression' => 1,
            'general_priority' => 0.75,
            'defense' => 0.25,
            'damage' => 0.5,
            'aerial_threat' => -1,
            'ranged_threat' => -1,
            'melee_threat' => 1,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => 0.25
        ]);

        Demon::create([
            'name' => 'Whiplash',
            'aggression' => 0.75,
            'general_priority' => 0.5,
            'defense' => 0,
            'damage' => 0.5,
            'aerial_threat' => -1,
            'ranged_threat' => 0.25,
            'melee_threat' => 0.5,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => 0
        ]);

        Demon::create([
            'name' => 'Prowler',
            'aggression' => 0.5,
            'general_priority' => 0.25,
            'defense' => 0,
            'damage' => 0,
            'aerial_threat' => -0.5,
            'ranged_threat' => 0,
            'melee_threat' => 0.25,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => 0
        ]);

        Demon::create([
            'name' => 'Carcass',
            'aggression' => 0.25,
            'general_priority' => 0.5,
            'defense' => 0.25,
            'damage' => 0.25,
            'aerial_threat' => -1,
            'ranged_threat' => 0.25,
            'melee_threat' => 0.5,
            'weak_points' => 0,
            'speed' => 0,
            'area_denial' => 1
        ]);

        Demon::create([
            'name' => 'Doom Hunter',
            'aggression' => 0.5,
            'general_priority' => 0.75,
            'defense' => 0.5,
            'damage' => 0.75,
            'aerial_threat' => 0.25,
            'ranged_threat' => 0.25,
            'melee_threat' => 0.75,
            'weak_points' => 0,
            'speed' => -0.25,
            'area_denial' => 0
        ]);

        Demon::create([
            'name' => 'Mancubus',
            'aggression' => 0.5,
            'general_priority' => 0.5,
            'defense' => 0,
            'damage' => 0.75,
            'aerial_threat' => 0.75,
            'ranged_threat' => 0.75,
            'melee_threat' => 0.25,
            'weak_points' => 2,
            'speed' => -0.5,
            'area_denial' => 0.25
        ]);

        Demon::create([
            'name' => 'Cyber Mancubus',
            'aggression' => 0.25,
            'general_priority' => 0.5,
            'defense' => 0.25,
            'damage' => 0.5,
            'aerial_threat' => 0.25,
            'ranged_threat' => 0.75,
            'melee_threat' => 0.25,
            'weak_points' => 1,
            'speed' => -0.5,
            'area_denial' => 0.75
        ]);

        Demon::create([
            'name' => 'Pain Elemental',
            'aggression' => 0,
            'general_priority' => 0.5,
            'defense' => 0.75,
            'damage' => 0.75,
            'aerial_threat' => 0.25,
            'ranged_threat' => 0.75,
            'melee_threat' => -0.5,
            'weak_points' => 0,
            'speed' => -0.5,
            'area_denial' => 0
        ]);

        Demon::create([
            'name' => 'Baron of Hell',
            'aggression' => 1,
            'general_priority' => 0.75,
            'defense' => 1,
            'damage' => 0.5,
            'aerial_threat' => -0.25,
            'ranged_threat' => -0.25,
            'melee_threat' => 0.5,
            'weak_points' => 0,
            'speed' => 0.75,
            'area_denial' => 0
        ]);

        Demon::create([
            'name' => 'Arch-vile',
            'aggression' => 0,
            'general_priority' => 1,
            'defense' => 0.75,
            'damage' => 0,
            'aerial_threat' => -0.5,
            'ranged_threat' => 0.25,
            'melee_threat' => -0.5,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => 0.75
        ]);

        Demon::create([
            'name' => 'Tyrant',
            'aggression' => 0,
            'general_priority' => 0.5,
            'defense' => 1,
            'damage' => 0.75,
            'aerial_threat' => 0.5,
            'ranged_threat' => 0.75,
            'melee_threat' => 0,
            'weak_points' => 0,
            'speed' => -0.75,
            'area_denial' => 0.5
        ]);

        Demon::create([
            'name' => 'Pinky',
            'aggression' => 0.75,
            'general_priority' => 0.75,
            'defense' => 0.5,
            'damage' => 0.75,
            'aerial_threat' => -1,
            'ranged_threat' => -1,
            'melee_threat' => 0.75,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => -0.5
        ]);

        Demon::create([
            'name' => 'Revenant',
            'aggression' => 0,
            'general_priority' => -0.25,
            'defense' => -0.25,
            'damage' => 0.25,
            'aerial_threat' => 0,
            'ranged_threat' => 0,
            'melee_threat' => -0.25,
            'weak_points' => 2,
            'speed' => 0,
            'area_denial' => 0.25
        ]);

        Demon::create([
            'name' => 'Marauder',
            'aggression' => 1,
            'general_priority' => 0.25,
            'defense' => 1,
            'damage' => 0.5,
            'aerial_threat' => 0.5,
            'ranged_threat' => 0.25,
            'melee_threat' => 0.5,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => 0.5
        ]);

        Demon::create([
            'name' => 'Blood Makyr',
            'aggression' => 0,
            'general_priority' => 0.5,
            'defense' => 0.5,
            'damage' => 0.5,
            'aerial_threat' => 0.25,
            'ranged_threat' => 0.5,
            'melee_threat' => -0.25,
            'weak_points' => 1,
            'speed' => 0,
            'area_denial' => 0.5
        ]);

        Demon::create([
            'name' => 'Armored Baron',
            'aggression' => 0.5,
            'general_priority' => 0.25,
            'defense' => 1,
            'damage' => 0,
            'aerial_threat' => -0.5,
            'ranged_threat' => 0,
            'melee_threat' => 0.5,
            'weak_points' => 1,
            'speed' => 0.5,
            'area_denial' => -0.25
        ]);

        Demon::create([
            'name' => 'Screecher',
            'aggression' => -1,
            'general_priority' => -1,
            'defense' => -1,
            'damage' => -1,
            'aerial_threat' => -1,
            'ranged_threat' => -1,
            'melee_threat' => -1,
            'weak_points' => 0,
            'speed' => -0.75,
            'area_denial' => 1
        ]);
    }
}
