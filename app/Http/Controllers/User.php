<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests; 

class User extends Controller
{
    public function Usertest(){
        return 'hello world';
    }
    public function getURI(Request $request){
        echo $request->url(); 
    }
    public function loadview(){
        $data = array(
            'acb' => 'name', 
        );
        $e = 'test case';
        return view('User',$data);
    }
    public function postname(Request $request){
        $file = $request->file('filename');
        if($file->store('uploads')){
            echo 'thêm ảnh thành công';
        }else{
            echo 'thêm ảnh thất bai';
        }
    }
    public function Jsonuser(){
        $data = array('name' => 'Abigail',
        'state' => 'CA' );
        return response()->json([$data]);
    }
    public function layout(){
        return view('admin.layout.testlayout');
    }
}
