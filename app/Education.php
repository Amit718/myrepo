<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	protected $fillable = [
		'user_id',
	    'course',
	    'university',
	    'year'
 	];

    public function users() {
        return $this->belongsTo('App\User','user_id','id');
    }
}
