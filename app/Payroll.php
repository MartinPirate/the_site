<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Payroll
 *
 * @property int $id
 * @property int $user_id
 * @property int $total_days_attended calculated from the attendance table
 * @property float $pay_per_date
 * @property float $fines
 * @property float $deductions
 * @property float $amount_paid
 * @property string $status PAID/PENDING etc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $role_id
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll newQuery()
 * @method static \Illuminate\Database\Query\Builder|Payroll onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereDeductions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereFines($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll wherePayPerDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereTotalDaysAttended($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payroll whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Payroll withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Payroll withoutTrashed()
 * @mixin \Eloquent
 */
class Payroll extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
