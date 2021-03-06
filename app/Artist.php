<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table='artist';
    
    protected $fillable = [
        'name',
        'info',
        'pic',
        'genre_id'
    ];
    public $timestamps = false;

    public function music()
    {
        return $this->hasMany('App\Music');
    }
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
