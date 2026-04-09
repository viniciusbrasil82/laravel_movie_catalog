<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
        'title',
        'poster_url',
        'release_year',
        'created_by',
        'author_id',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }   

    public function author()
    {
        return $this->belongsTo(Author::class);
    } 
}
