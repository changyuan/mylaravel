<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    //
    
    protected $table = 'members';

    protected $fillable = ['name', 'email', 'password'];


    protected $hidden = ["password"];
    
	public function scopeStatus($query)
    {
        return $query->where('status', '>', 0);
    }

}
