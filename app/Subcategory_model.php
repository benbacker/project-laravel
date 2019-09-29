<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory_model extends Model
{
    //
    protected $table = 'subcategory';
    protected $filltable = ['name','category_id'];
    public $timestamps = false;
    public function category()
    {
        return $this->belongsTo('App\Category_model', 'category_id', 'id');
    }
    public function categorysub()
    {
        return $this->morphOne('App\Category_model', 'category');
    }
}
