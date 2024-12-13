<?php

namespace App\Models;

use App\Enums\CategoryType;
use App\Traits\SelfReferenceTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes, SelfReferenceTrait;
    protected $guarded = [];
    protected $casts = [
        // 'type' => CategoryType::class,
    ];

    protected function scopeActive($query)
    {
        return $query->where("status", true);
    }

    protected function scopeByParent($query)
    {
        return $query->whereNull("parent_id");
    }
    protected function scopeByChild($query)
    {
        return $query->whereNotNull("parent_id");
    }
}
