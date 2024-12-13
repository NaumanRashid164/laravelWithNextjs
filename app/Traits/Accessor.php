<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Schema;

trait Accessor
{

    public function isActive(): Attribute
    {
        return Attribute::make(
            get: fn(bool $value) => $value ? "Active" : "Not Active",
        );
    }
}
