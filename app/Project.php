<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Project
 *
 * @property int $id
 * @property string $project_name
 * @property string $location
 * @property string $address
 * @property int $no_of_floors or unit
 * @property float $price_per_floor
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Query\Builder|Project onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereNoOfFloors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePricePerFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Project withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Project withoutTrashed()
 * @mixin \Eloquent
 */
class Project extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
