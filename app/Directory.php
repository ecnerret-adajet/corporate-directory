<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Directory extends Model
{
    
  
    
    protected $table = 'directories';
    
    protected $fillable = [
        'name',
        'address',
        'position',
        'phone',
        'local',
        'email',
        'avatar'
    ];
    
    
    
    /* list for user */
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    /* list for companies */
    
    
    public function companies()
    {
        return $this->belongsToMany('App\Company')->withTimestamps();
    }
    
    public function getCompanyListAttribute()
    {
        return $this->companies->lists('id')->all();
    }
    
    /* list for department */
    
    public function departments()
    {
        return $this->belongsToMany('App\Department')->withTimestamps();
    }
    
    public function getDepartmentListAttribute()
    {
        return $this->departments->lists('id')->all();
    }

    public function statuses()
    {
        return $this->belongsToMany('App\Status')->withTimestamp();
    }

    public function getStatusListAttribute()
    {
        return $this->statuses->lists('id')->all();
    }
    
    
    
}
