<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\DocumentCategory
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|DocumentCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|DocumentCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|DocumentCategory withoutTrashed()
 * @mixin \Eloquent
 */
class DocumentCategory extends Model
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $guarded = [];
}
