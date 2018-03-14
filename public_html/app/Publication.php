<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Publication extends Model
{
    public function Publisher(){
        return $this->belongsTo(Publisher::class,'id');
    }
}
