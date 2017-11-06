<?php

namespace App;

use App\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    /**
     * Fields that are mass assignable
     * @var array
     */

    protected $fillable = [
        'user_id', 'title', 'description', 'adresse', 'flechettes', 'billard', 'flipper', 'baby_foot', 'horaires', 'picture'

    ];

    public function favorited()
    {
        return (bool) Favorite::where('user_id', Auth::id())
            ->where('user_id', $this->id)
            ->first();
    }

    /**
     * @return array
     */
}
