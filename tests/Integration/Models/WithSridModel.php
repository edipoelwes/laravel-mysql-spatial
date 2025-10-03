<?php

use EdipoElwes\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WithSridModel.
 *
 * @property int                                          id
 * @property \EdipoElwes\LaravelMysqlSpatial\Types\Point      location
 * @property \EdipoElwes\LaravelMysqlSpatial\Types\LineString line
 * @property \EdipoElwes\LaravelMysqlSpatial\Types\LineString shape
 */
class WithSridModel extends Model
{
    use SpatialTrait;

    protected $table = 'with_srid';

    protected $spatialFields = ['location', 'line'];

    public $timestamps = false;
}
