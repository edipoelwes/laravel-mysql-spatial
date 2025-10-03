<?php

use EdipoElwes\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GeometryModel.
 *
 * @property int                                          id
 * @property \EdipoElwes\LaravelMysqlSpatial\Types\Point      location
 * @property \EdipoElwes\LaravelMysqlSpatial\Types\LineString line
 * @property \EdipoElwes\LaravelMysqlSpatial\Types\LineString shape
 */
class GeometryModel extends Model
{
    use SpatialTrait;

    protected $table = 'geometry';

    protected $spatialFields = ['location', 'line', 'multi_geometries'];
}
