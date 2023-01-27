<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = ['name', 'code', 'state'];
    use HasFactory;
    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
