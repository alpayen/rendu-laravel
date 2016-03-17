<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['content', 'user_id', 'post_id']; //sécurisation

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function post() {
        return $this->belongsTo('App\Models\Post');
    }
}
