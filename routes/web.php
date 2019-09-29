<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    return 'xin chào';
});

Route::get('test','User@Usertest');
Route::get('Tester/acb', 'User@getURI');
Route::get('viewmain', function (){
    return view('User');
});
Route::get('main', 'User@loadview');
Route::post('/submit','User@postname');
Route::get('getjson', 'User@Jsonuser');
Route::get('layout', 'User@layout');
Route::get('taobang', function () {
    Schema::create('okfine', function ($table) {
        $table->increments('id');
        $table->string('username')->nullable();
        $table->string('password')->nullable();
    });
    echo 'thêm database thành công';
});
Route::get('delete', function () {
    Schema::drop('migrations');
    echo "xóa bảng thành công";
});

Route::get('getdb', function () {
    $data = DB::table('users')->get();
    
    echo "<pre>";
    print_r ($data);
    echo "</pre>";
    die;
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            echo $key.":".$value."<br>";
        }
    }
});

Route::get('getsl', function () {
    $data = DB::table('users')->select(['id','name','password'])->where('id',2)->get();
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            echo $key.":".$value."<br>";
        }
    }
});

Route::get('update', function () {
    DB::table('users')->where('id',1)->update(['name'=>'website']);
    echo "da update";
});

Route::get('insertdb', function () {
    DB::table('sanpham')->insert([
        ['name'=>'dien thoai','price'=>'10000','id_loaisanpham'=>1],
        ['name'=>'laptop','price'=>'20000','id_loaisanpham'=>2],
        ['name'=>'ipod','price'=>'10000','id_loaisanpham'=>1],
    ]);
    echo "them thanh cong";
});

Route::get('ints', function () {
    $sanpham = new App\SanPham();
    $sanpham->tensanpham = 'iphone';
    $sanpham->loaisanpham = 'iphone2';
    $sanpham->save();
    echo"da save";
});
//  Eloquent – Model 
// --> Get tất cả các dữ liệu từ database có thể trả về các dạng toJson, toArray, get trả về object
Route::get('ally', function () {
    $user = App\User::all();
    
    echo "<pre>";
    print_r ($user);
    echo "</pre>";
    
});
Route::get('allfind', function () {
    $user = App\User::find(2);
    
    echo "<pre>";
    print_r ($user);
    echo "</pre>";
    
});
//get phần từ theo điều kiện name = 'ben'
Route::get('getwhere', function () {
    $user = App\User::where('name','ben')->get()->toArray();
    echo "<pre>";
    print_r ($user);
    echo "</pre>";
});
// xóa phần từ theo khóa chính
Route::get('getdelete', function () {
    App\User::destroy(4);
    echo "đã xóa";
});

//Tao liên kết sản phẩm
Route::get('lienket', function () {
    $data = App\LoaiSanPham::find(2)->sanpham->toArray();
    
    echo "<pre>";
    print_r ($data);
    echo "</pre>";
    
});

// Middleware
Route::get('diem', function () {
    echo 'da co diem';
})->middleware('MyMiddleware')->name('diem');

Route::get('loi', function () {
    echo 'chua co diem';
})->name('loi');

Route::get('nhapdiem', function () {
    return view('Middleware');
})->name('nhapdiem');

Route::get('getcategory', 'Category@getCategory');
Route::get('gettest', 'Category@textpage');
Route::get('gettest1', 'Category@textpage1');
Route::get('gettest2', 'Category@textpage2');





