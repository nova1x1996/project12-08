<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_social extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'provider_user_id',  'provider',  'user'
    ];

    protected $primaryKey = 'id';
    protected $table = 'tbl_social';
    public function login()
    {
        return $this->belongsTo('App\Login', 'user');
    }
}
