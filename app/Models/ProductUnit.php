<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductUnit extends Model
{
    protected $fillable = [
        'product_category_id', 'name', 'slug', 'location', 'type',
        'description', 'features', 'main_image', 'sort_order', 'is_active',
    ];

    protected $casts = ['is_active' => 'boolean'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductUnitImage::class)->orderBy('sort_order');
    }

    public function getFeaturesArrayAttribute(): array
    {
        if (empty($this->features)) return [];
        return array_filter(array_map('trim', explode("\n", $this->features)));
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
