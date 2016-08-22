<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    
    protected $fillable = [
        'name'
    ];
    
    
    public function directories()
    {
        return $this->belongsToMany('App\Directory');
    }
}
