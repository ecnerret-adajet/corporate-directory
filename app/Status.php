<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $table = 'statuses';

	
    protected $fillable = [
    	'name'
    ];

    public function directories()
    {
    	return $this->belongsToMany('App\Directory');
    }


}