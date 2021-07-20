<?php
use Illuminate\Http\Request;
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

// Route::get('/shopkaro', function() {
//     return view('shopkaro.index');
// });

Route::get('/shopkaro','ProductController@view');



Route::get('/shopkaro/Watches', function() {
    $data = DB::table('products')->join('categories', 'products.category_id', '=', 'categories.category_id')->where(["category"=>"Watches"])->get();
    // print_r($data);
    return view('shopkaro.watch', compact('data'));
    // return view('shopkaro.watch');
});

Route::get('/shopkaro/Mobiles', function() {
    // $category = DB::table('categories')-> where(["category"=>"Mobiles"]) ->get();
    // $category_id = DB::table('categories')->find($id);
    // print_r($category_id);
    $data = DB::table('products')->join('categories', 'products.category_id', '=', 'categories.category_id')->where(["category"=>"Mobiles"])->get();
    // print_r($data);
    return view('shopkaro.mobile', compact('data'));
});

Route::get('/shopkaro/Laptops', function() {
    $data = DB::table('products')->join('categories', 'products.category_id', '=', 'categories.category_id')->where(["category"=>"Laptops"])->get();
    // print_r($data);
    return view('shopkaro.laptop', compact('data'));
    // return view('shopkaro.laptop');
});

Route::resource('shopkaro/login' , 'loginController');


Route::get("/shopkaro/test", function(Request $req) {


    $res = \Validator::make($req->all(), [
        "name" => "required | string"
    ]);
    return response()->json($res->messages());
});





//Route::get("/shopkaro/signup", "loginController@store");

Route::post('/shopkaro/check', 'ValidController@logincheck');

Route::post('/shopkaro/cart', 'ProductController@addtocart');
// Route::get('shopkaro/index'. function(){
//     return view('shopkaro/index');
// });

Route::get('/shopkaro/add', 'ProductController@insertt');

Route::get('shopkaro/details/{id}', 'ProductController@detail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
