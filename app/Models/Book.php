<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    
    /**
    * 
    * The roles that belong to the user.
    *
    */
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}