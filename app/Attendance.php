<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Attendance
 *
 * @property int $id
 * @property int $user_id
 * @property string $day
 * @property int $did_attend was in Attendance or not
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newQuery()
 * @method static \Illuminate\Database\Query\Builder|Attendance onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereDidAttend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Attendance withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Attendance withoutTrashed()
 * @mixin \Eloquent
 */
class Attendance extends Model
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $guarded = [];
}
