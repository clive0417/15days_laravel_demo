<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    public function posts() // table之間的關係
    {
        
        return $this->belongsMany('App\Post'); //()內為上述的檔案位置

    }
}
