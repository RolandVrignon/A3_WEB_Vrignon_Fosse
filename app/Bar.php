<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    protected $fillable = [
        'user_id', 'title', 'description', 'adresse', 'picture', 'flechette', 'billard', 'flipper', 'baby-foot',

    ];

    /**
     * @return array
     */
}
