<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = ['name', 'password', 'email', 'phone', 'address', 'google_id'];
    protected $hidden = [
        "password"
    ];
    public function orders()
    {
        return $this->hasMany(Order::class); //Item là class trong thư mục Models
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class); //Item là class trong thư mục Models
    }
    public function wishlist()
    {
        return $this->hasMany('App\Models\Wishlist', 'customer_id', 'id');
    }
}
