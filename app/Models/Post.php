<?php

namespace App\Models;

use App\Casts\Serialize;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
       // 'config' => Serialize::class
    ];



    /**
     * Accessors && Mutators
     *
     * @return Attribute
     */

    // public function isActive(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn(bool $value) => $value ? "Active" : "Not Active",
    //     );
    // }

}
