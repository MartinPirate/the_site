<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Assest
 *
 * @property int $id
 * @property string $asset_name
 * @property string $status new/used
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Assest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Assest newQuery()
 * @method static \Illuminate\Database\Query\Builder|Assest onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Assest query()
 * @method static \Illuminate\Database\Eloquent\Builder|Assest whereAssetName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Assest withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Assest withoutTrashed()
 * @mixin \Eloquent
 */
class Assest extends Model
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    protected $guarded = [];
}
