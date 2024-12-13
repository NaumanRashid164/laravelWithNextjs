<?php

namespace App\Models;

use App\Casts\Serialize;
use App\Traits\HasPermissionsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory, HasPermissionsTrait; //Import The Trait;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
       // 'config' => Serialize::class
    ];


    public function roles() {

        return $this->belongsToMany(Role::class,'roles_permissions');
            
     }
     
     public function users() {
     
        return $this->belongsToMany(User::class,'users_permissions');
            
     }


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
