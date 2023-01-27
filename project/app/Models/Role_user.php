<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{

    protected $fillable = ['role_id', 'user_id'];

    use HasFactory;

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
