<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use EdipoElwes\LaravelMysqlSpatial\Eloquent\SpatialTrait;

/**
 * Example model for Laravel 8+ and PHP 8+
 * 
 * @property \EdipoElwes\LaravelMysqlSpatial\Types\Point   $location
 * @property \EdipoElwes\LaravelMysqlSpatial\Types\Polygon $area
 */
class Place extends Model
{
    use SpatialTrait;

    protected $fillable = [
        'name',
        'location',
        'area'
    ];

    protected array $spatialFields = [
        'location',
        'area'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}