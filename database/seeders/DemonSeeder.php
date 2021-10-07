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
        $demons = Demon::all();

        foreach ($demons as $demon)
            $demon->delete();

        Demon::create([
            'name' => 'Soldier',
            'color' => 'green',
            'aggression' => -0.5,
            'general_priority' => -0.75,
            'defense' => -0.75,
            'damage' => -0.5,
            'aerial_threat' => -0.5,
            'ranged_threat' => -0.5,
            'melee_threat' => -0.75,
            'weak_points' => 0,
            'speed' => -0.5,
            'area_denial' => -0.75,
            'evasiveness' => -0.75
        ]);

        Demon::create([
            'name' => 'Imp',
            'color' => 'brown',
            'aggression' => 0.5,
            'general_priority' => -0.75,
            'defense' => -0.75,
            'damage' => -0.5,
            'aerial_threat' => -0.5,
            'ranged_threat' => -0.5,
            'melee_threat' => -0.75,
            'weak_points' => 0,
            'speed' => 0,
            'area_denial' => -1,
            'evasiveness' => -0.25
        ]);

        Demon::create([
            'name' => 'Shield Soldier',
            'color' => 'teal',
            'aggression' => 0,
            'general_priority' => 0,
            'defense' => -0.25,
            'damage' => 0.5,
            'aerial_threat' => -1,
            'ranged_threat' => -1,
            'melee_threat' => 0.75,
            'weak_points' => 0,
            'speed' => -0.5,
            'area_denial' => 0.25,
            'evasiveness' => -0.75
        ]);

        Demon::create([
            'name' => 'Arachnotron',
            'color' => 'pink',
            'aggression' => 0,
            'general_priority' => -0.25,
            'defense' => 0,
            'damage' => 0,
            'aerial_threat' => -0.25,
            'ranged_threat' => 0,
            'melee_threat' => -0.25,
            'weak_points' => 0.5,
            'speed' => -0.25,
            'area_denial' => 0.5,
            'evasiveness' => -0.25
        ]);

        Demon::create([
            'name' => 'Cacodemon',
            'color' => 'red',
            'aggression' => 0.75,
            'general_priority' => 0.75,
            'defense' => -0.5,
            'damage' => 0.75,
            'aerial_threat' => 0.75,
            'ranged_threat' => 0,
            'melee_threat' => 0.75,
            'weak_points' => 0.5,
            'speed' => 0.75,
            'area_denial' => 0,
            'evasiveness' => -0.5
        ]);

        Demon::create([
            'name' => 'Hell Knight',
            'color' => 'purple',
            'aggression' => 1,
            'general_priority' => 0.5,
            'defense' => 0,
            'damage' => 0.25,
            'aerial_threat' => -1,
            'ranged_threat' => -1,
            'melee_threat' => 0.75,
            'weak_points' => 0,
            'speed' => 0.75,
            'area_denial' => 0.25,
            'evasiveness' => -0.5
        ]);

        Demon::create([
            'name' => 'Dread Knight',
            'color' => 'orange',
            'aggression' => 1,
            'general_priority' => 0.75,
            'defense' => 0.25,
            'damage' => 0.5,
            'aerial_threat' => -1,
            'ranged_threat' => -1,
            'melee_threat' => 1,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => 0.25,
            'evasiveness' => -0.5
        ]);

        Demon::create([
            'name' => 'Whiplash',
            'color' => 'black',
            'aggression' => 0.75,
            'general_priority' => 0.5,
            'defense' => 0,
            'damage' => 0.5,
            'aerial_threat' => -1,
            'ranged_threat' => 0.25,
            'melee_threat' => 0.5,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => 0,
            'evasiveness' => 0.5
        ]);

        Demon::create([
            'name' => 'Prowler',
            'color' => 'purple',
            'aggression' => 0.5,
            'general_priority' => 0.25,
            'defense' => 0,
            'damage' => 0,
            'aerial_threat' => -0.5,
            'ranged_threat' => 0,
            'melee_threat' => 0.25,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => 0,
            'evasiveness' => 0.75
        ]);

        Demon::create([
            'name' => 'Carcass',
            'color' => 'brown',
            'aggression' => 0.25,
            'general_priority' => 0.5,
            'defense' => 0.25,
            'damage' => 0.25,
            'aerial_threat' => -1,
            'ranged_threat' => 0.25,
            'melee_threat' => 0.5,
            'weak_points' => 0,
            'speed' => 0,
            'area_denial' => 1,
            'evasiveness' => -0.25
        ]);

        Demon::create([
            'name' => 'Doom Hunter',
            'color' => 'gray',
            'aggression' => 0.5,
            'general_priority' => 0.75,
            'defense' => 0.5,
            'damage' => 0.75,
            'aerial_threat' => 0.25,
            'ranged_threat' => 0.25,
            'melee_threat' => 0.75,
            'weak_points' => 0,
            'speed' => -0.25,
            'area_denial' => 0,
            'evasiveness' => -0.25
        ]);

        Demon::create([
            'name' => 'Mancubus',
            'color' => 'coral',
            'aggression' => 0.5,
            'general_priority' => 0.5,
            'defense' => 0,
            'damage' => 0.75,
            'aerial_threat' => 0.75,
            'ranged_threat' => 0.75,
            'melee_threat' => 0.25,
            'weak_points' => 1,
            'speed' => -0.5,
            'area_denial' => 0.25,
            'evasiveness' => -0.75
        ]);

        Demon::create([
            'name' => 'Cyber Mancubus',
            'color' => 'green',
            'aggression' => 0.25,
            'general_priority' => 0.5,
            'defense' => 0.25,
            'damage' => 0.5,
            'aerial_threat' => 0.25,
            'ranged_threat' => 0.75,
            'melee_threat' => 0.25,
            'weak_points' => 0.5,
            'speed' => -0.5,
            'area_denial' => 0.75,
            'evasiveness' => -0.75
        ]);

        Demon::create([
            'name' => 'Pain Elemental',
            'color' => 'brown',
            'aggression' => 0,
            'general_priority' => 0.5,
            'defense' => 0.75,
            'damage' => 0.75,
            'aerial_threat' => 0.25,
            'ranged_threat' => 0.75,
            'melee_threat' => -0.5,
            'weak_points' => 0,
            'speed' => -0.5,
            'area_denial' => 0,
            'evasiveness' => 0
        ]);

        Demon::create([
            'name' => 'Baron of Hell',
            'color' => 'orange',
            'aggression' => 1,
            'general_priority' => 0.75,
            'defense' => 1,
            'damage' => 0.5,
            'aerial_threat' => -0.25,
            'ranged_threat' => -0.25,
            'melee_threat' => 0.5,
            'weak_points' => 0,
            'speed' => 0.75,
            'area_denial' => 0,
            'evasiveness' => -0.25
        ]);

        Demon::create([
            'name' => 'Arch-vile',
            'color' => 'yellow',
            'aggression' => 0,
            'general_priority' => 1,
            'defense' => 0.75,
            'damage' => 0,
            'aerial_threat' => -0.5,
            'ranged_threat' => 0.25,
            'melee_threat' => -0.5,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => 0.75,
            'evasiveness' => 0.75
        ]);

        Demon::create([
            'name' => 'Tyrant',
            'color' => 'orange',
            'aggression' => 0,
            'general_priority' => 0.5,
            'defense' => 1,
            'damage' => 0.75,
            'aerial_threat' => 0.5,
            'ranged_threat' => 0.75,
            'melee_threat' => 0,
            'weak_points' => 0,
            'speed' => -0.75,
            'area_denial' => 0.5,
            'evasiveness' => -1
        ]);

        Demon::create([
            'name' => 'Pinky',
            'color' => 'crimson',
            'aggression' => 0.75,
            'general_priority' => 0.75,
            'defense' => 0.5,
            'damage' => 0.75,
            'aerial_threat' => -1,
            'ranged_threat' => -1,
            'melee_threat' => 0.75,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => -0.5,
            'evasiveness' => 0
        ]);

        Demon::create([
            'name' => 'Revenant',
            'color' => 'brown',
            'aggression' => 0,
            'general_priority' => -0.25,
            'defense' => -0.25,
            'damage' => 0.25,
            'aerial_threat' => 0,
            'ranged_threat' => 0,
            'melee_threat' => -0.25,
            'weak_points' => 1,
            'speed' => 0,
            'area_denial' => 0.25,
            'evasiveness' => 0
        ]);

        Demon::create([
            'name' => 'Marauder',
            'color' => 'green',
            'aggression' => 1,
            'general_priority' => 0.25,
            'defense' => 1,
            'damage' => 0.5,
            'aerial_threat' => 0.5,
            'ranged_threat' => 0.25,
            'melee_threat' => 0.5,
            'weak_points' => 0,
            'speed' => 0.5,
            'area_denial' => 0.5,
            'evasiveness' => 0.75
        ]);

        Demon::create([
            'name' => 'Blood Makyr',
            'color' => 'red',
            'aggression' => 0,
            'general_priority' => 0.5,
            'defense' => 0.5,
            'damage' => 0.5,
            'aerial_threat' => 0.25,
            'ranged_threat' => 0.5,
            'melee_threat' => -0.25,
            'weak_points' => 0.5,
            'speed' => 0,
            'area_denial' => 0.5,
            'evasiveness' => 0.25
        ]);

        Demon::create([
            'name' => 'Armored Baron',
            'color' => 'blue',
            'aggression' => 0.5,
            'general_priority' => 0.25,
            'defense' => 1,
            'damage' => 0,
            'aerial_threat' => -0.5,
            'ranged_threat' => 0,
            'melee_threat' => 0.5,
            'weak_points' => 0.5,
            'speed' => 0.5,
            'area_denial' => -0.25,
            'evasiveness' => -0.25
        ]);

        Demon::create([
            'name' => 'Screecher',
            'color' => 'purple',
            'aggression' => -1,
            'general_priority' => -1,
            'defense' => -1,
            'damage' => -1,
            'aerial_threat' => -1,
            'ranged_threat' => -1,
            'melee_threat' => -1,
            'weak_points' => 0,
            'speed' => -0.75,
            'area_denial' => 1,
            'evasiveness' => -1
        ]);
    }
}
