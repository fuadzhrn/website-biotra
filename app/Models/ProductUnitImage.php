<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductUnitImage extends Model
{
    protected $fillable = ['product_unit_id', 'image_path', 'alt_text', 'sort_order'];

    public function unit()
    {
        return $this->belongsTo(ProductUnit::class, 'product_unit_id');
    }
}
