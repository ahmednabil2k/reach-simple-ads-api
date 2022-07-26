<?php

namespace Modules\Ads\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ads extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const AD_TYPES = ['free', 'paid'];

    protected $fillable = [
        'title',
        'description',
        'type',
        'advertiser_id',
        'category_id',
        'tags',
        'start_date'
    ];

    protected $casts = [
        'tags' => 'array'
    ];

    protected $with = ['category'];

    protected function title(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => trim(htmlspecialchars($value))
        );
    }

    protected function description(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => trim(htmlspecialchars($value))
        );
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function advertiser(): BelongsTo
    {
        return $this->belongsTo(Advertiser::class, 'advertiser_id');
    }
}
