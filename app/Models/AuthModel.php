<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthModel extends Authenticatable
{
    use HasFactory;
    protected $table = "tbl_auth";

    protected $fillable = [
        'email',
        'password',
        'remember_token'
    ];
    
    public $timestamps = false;
}
