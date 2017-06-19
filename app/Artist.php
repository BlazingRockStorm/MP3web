<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table='artist';
    
    protected $fillable = [
        'name',
        'info',
        'pic'
    ];
    public $timestamps = false;
    public function music()
    {
        return $this->hasMany('App\Music');
    }
}
