<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    //
    protected $table = 'recommend';

    protected $fillable = ['subject', 'summary', 'headimage','type','status'];


    protected $hidden = ["status"];
    
	public function scopeStatus($query)
    {
        return $query->where('status', '>', 0);
    }
    
}
