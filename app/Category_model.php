<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_model extends Model
{
    //
    protected $table = 'category';
    protected $filltable = ['id','name','url'];
    public $timestamps = false;
    public function subcategory()
    {
        return $this->hasMany('App\Subcategory_model','category_id','id');
    }
}
