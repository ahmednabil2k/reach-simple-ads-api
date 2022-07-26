<?php

namespace Modules\Ads\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Category $model){
            $model->slug = Str::slug(trim(htmlspecialchars($model->name)));
        });
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => trim(htmlspecialchars($value))
        );
    }

    public function ads(): HasMany
    {
        return $this->hasMany(Ads::class, 'category_id');
    }

}
