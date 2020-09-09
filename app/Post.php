<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model

{
    protected $fillable = ['title','content','category_id'];
    public function user() 
    {
        return $this->belongsTo('App\User');

    }
    public function category() 
    {
        return $this->belongsTo('App\Category');

    }
    public function tags() // table之間的關係
    {
        
        return $this->belongsToMany('App\Tag'); //()內為上述的檔案位置

    }
}
