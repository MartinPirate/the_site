<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\DocumentManager
 *
 * @property int $id
 * @property int|null $project_id
 * @property int|null $property_id
 * @property string $document_title
 * @property string $document_url
 * @property string $file_type File/Images/Templates
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $document_category_id
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager newQuery()
 * @method static \Illuminate\Database\Query\Builder|DocumentManager onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager query()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager whereDocumentCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager whereDocumentTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager whereFileType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentManager whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|DocumentManager withTrashed()
 * @method static \Illuminate\Database\Query\Builder|DocumentManager withoutTrashed()
 * @mixin \Eloquent
 */
class DocumentManager extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
