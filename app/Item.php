<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Item
 *
 * @property int $id
 * @property int $asset_id
 * @property string $item_name
 * @property int $total_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item newQuery()
 * @method static \Illuminate\Database\Query\Builder|Item onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereAssetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereTotalCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Item withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Item withoutTrashed()
 * @mixin \Eloquent
 */
class Item extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
