<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;


class Document extends Model
{
    public function Category(){
        return $this->belongsTo(Category::class,'id');
    }
}
