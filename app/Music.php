<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'music';
    protected $fillable = [
        'track',
        'artist',
        'album',
        'genre',
        'link',
        'cover_art',
        'artist_id',
        'genre_id'
    ];
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
