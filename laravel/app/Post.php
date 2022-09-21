<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'content',
        'img',
        'date'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
