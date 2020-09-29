<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Property
 *
 * @property int $id
 * @property string $name
 * @property int $project_id
 * @property string $location
 * @property string $address
 * @property string $status sold or rented
 * @property float $marked_price amount_targeted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $installment_id
 * @method static \Illuminate\Database\Eloquent\Builder|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property newQuery()
 * @method static \Illuminate\Database\Query\Builder|Property onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereInstallmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereMarkedPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Property withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Property withoutTrashed()
 * @mixin \Eloquent
 */
class Property extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
