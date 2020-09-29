<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Template
 *
 * @property int $id
 * @property string $template_type tender/newspaper/ads/notices
 * @property string $body WYSIWYG
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Template newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Template newQuery()
 * @method static \Illuminate\Database\Query\Builder|Template onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Template query()
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereTemplateType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Template whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Template withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Template withoutTrashed()
 * @mixin \Eloquent
 */
class Template extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
