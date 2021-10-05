<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Demon extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'name',
        'icon',
        'image',
        'aggression',
        'general_priority',
        'defense',
        'evasiveness',
        'damage',
        'area_denial',
        'aerial_threat',
        'ranged_threat',
        'melee_threat',
        'weak_points',
        'speed',
    ];

    public static function comparables() 
    {
        return [
            'aggression',
            'general_priority',
            'defense',
            'evasiveness',
            'damage',
            'area_denial',
            'aerial_threat',
            'ranged_threat',
            'melee_threat',
            'weak_points',
            'speed',
        ];
    }

    /**
     * Gets the file path
     * 
     * @return string
     */
    public function getFilePathAttribute ()
    {
        $fileName = Str::camel($this->name);

        return public_path("/images/demons/$fileName.png");
    }
}
