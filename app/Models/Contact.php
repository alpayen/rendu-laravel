<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function contact() {
        return $this->belongsTo('App\Models\Contact');
    }
}