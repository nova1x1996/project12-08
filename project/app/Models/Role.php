<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'slug'];

    use HasFactory;

    public function role_users()
    {
        return $this->hasMany(Role_user::class);
    }
}
