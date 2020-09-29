<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Installment
 *
 * @property int $id
 * @property string $name
 * @property float $amount
 * @property int $terms
 * @property string $descriptions
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Installment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Installment newQuery()
 * @method static \Illuminate\Database\Query\Builder|Installment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Installment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Installment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Installment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Installment whereDescriptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Installment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Installment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Installment whereTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Installment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Installment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Installment withoutTrashed()
 * @mixin \Eloquent
 */
class Installment extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
