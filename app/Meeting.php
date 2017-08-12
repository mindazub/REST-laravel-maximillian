<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
	protected $fillable = ['title', 'time', 'description'];
	
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
