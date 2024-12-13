<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'slug' => EnumsRole::class
    // ];


    public function permissions()
    {

        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public function users()
    {

        return $this->belongsToMany(User::class, 'users_roles');
    }


    /**
     * Accessors && Mutators
     *
     * @return Attribute
     */

    // public function slug(): Attribute
    // {
    //     return Attribute::make(
    //         // get: fn(string $value) => ucfirst(str_replace("-", " ", $value)),
    //         set: fn(string $value) => str($value)->slug("-"),
    //     );
    // }

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($role) {
            $role->slug = str($role->name)->slug("-");
        });
        self::updating(function ($role) {
            $role->slug = str($role->name)->slug("-");
        });
    }
}
