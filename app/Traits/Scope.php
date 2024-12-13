<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Builder;

trait Scope
{   
     /**
     * Scope a query to only include users of a given site.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  int  $siteId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function scopeBySite(Builder $builder)
    {
        $builder->when(!auth()->user()->hasAnyRole([Role::SUPER_ADMIN->value]), fn ($q) => $q->whereIn("site_id", [auth()->user()->site_id]));
    }
}