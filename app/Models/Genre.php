<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /**
    * 
    * The roles that belong to the user.
    *
    */
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
