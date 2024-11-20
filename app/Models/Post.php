<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // creator
    public function creator(){
        return $this->belongsTo(User::class, 'creator_id');
    }

    // update method : 
    protected $fillable = [
        'title',
        'description',
        'image',
        'creator_id',
    ];
}
