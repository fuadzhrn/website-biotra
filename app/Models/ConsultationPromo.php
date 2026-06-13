<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationPromo extends Model
{
    protected $fillable = ['title', 'description', 'is_active', 'sort_order'];

    protected $casts = ['is_active' => 'boolean'];

    public static function activePromo(): ?self
    {
        return static::where('is_active', true)->orderBy('sort_order')->first();
    }

    public static function activePromos()
    {
        return static::where('is_active', true)->orderBy('sort_order')->get();
    }
}
