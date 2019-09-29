<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category_model;
use App\Subcategory_model;

class Category extends Controller
{
    //
    public function getCategory(Category_model $model){
        $data = $model->all()->toArray();
        echo "<pre>";
        print_r ($data);
        echo "</pre>";
        die;
    }
    public function textpage(Category_model $model){
        $data = $model->find(7)->subcategory()->get()->toArray();
        
        echo "<pre>";
        print_r ($data);
        echo "</pre>";
        die;
    }
    public function textpage1(Subcategory_model $model){
        $data = $model->find(1)->category()->get()->toArray();
        
        echo "<pre>";
        print_r ($data);
        echo "</pre>";
        die;
    }
    public function textpage2(Subcategory_model $model){
        $data = $model->find(1)->categorysub()->get()->toArray();
        
        echo "<pre>";
        print_r ($data);
        echo "</pre>";
        die;
    }
}
