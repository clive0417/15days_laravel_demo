<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts() // table之間的關係
    {
        return $this->hasMany('App\Post'); //()內為上述的檔案位置

    }
}
