<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table='genres';
    protected $fillable = [
        'genre'
    ];
    public $timestamps = false;
    
    public function artist()
    {
        return $this->hasMany('App\Artist');
    }
}
