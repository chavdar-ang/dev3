<?php

namespace App\Messanger;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function thread()
    {
    	return $this->belongsTo('App\Messanger\Thread');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}