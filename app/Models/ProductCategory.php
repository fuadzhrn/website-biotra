<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'label', 'subtitle',
        'badge', 'breadcrumb', 'sort_order', 'is_active',
    ];

    protected $casts = ['is_active' => 'boolean'];

    public function units()
    {
        return $this->hasMany(ProductUnit::class)->orderBy('sort_order');
    }

    public function activeUnits()
    {
        return $this->hasMany(ProductUnit::class)->where('is_active', true)->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
