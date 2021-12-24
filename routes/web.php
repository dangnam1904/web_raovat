<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index',
[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);


Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);
// Route::get('loaisanpham/{type}',[
// 	'as'=>'loai',
// 	'uses'=>'PageController@getLoai'
// ]);

Route::get('/chi-tiet-sp/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getChiTiet'
]);


Route::get('/lienhe',[
    'as'=>'lienhe',
    'uses'=>'PageController@getLienhe'
]);
    
Route::get('/gioithieu',[
    'as'=>'gioithieu',
    'uses'=>'PageController@getGioithieu'
]);
Route::get('add_to_cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);

Route::get('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@getLogin'
]);
// Route::post('dang-nhap',[
// 	'as'=>'login',
// 	'uses'=>'PageController@postLogin'
// ]);

Route::get('dang-ki',[
	'as'=>'signin',
	'uses'=>'PageController@getSignin'
]);

Route::post('dang-ki',[
    'as'=>'sigin',
    'uses'=>'PageController@getSignin'
]);

Route::get('search',[
'as'=>'search',
'uses'=>'PageController@getSearch'
]);

Route::get('dang-san-pham',
[
'as'=> 'dangsp',
'uses'=>'PageController@dang_ban'
]);

Route::post('dang-san-pham',
[
'as'=> 'dangsp',
'uses'=>'PageController@postdang_ban'
]);


//back-end
// Route::get('admin',[
// 'as'=>'home',
// 'uses'=>'AdminController@getIndex'
// ]);
Route::get('admin/login',[
    'as'=>'login',
    'uses'=>'AdminController@getLogin'
]);

Route::get('admin/trang-chu',[
        'as'=>'trangchu',
        'uses'=>'AdminController@get_trangchu'
]);

Route::post('admin/trang-chu',[
    'as'=>'trangchu',
    'uses'=>'AdminController@post_login'
]);


Route::get('admin/logout',[
    'as'=>'logout',
    'uses'=>'AdminController@getLogout'
]);


Route::get('admin/all-user',[
    'as'=>'all_user',
    'uses'=>'Custom_userController@getAll'
]);

// phần loại sản phẩm
Route::get('admin/them-loai-san-pham',[
    'as'=>'add_loaisp',
    'uses'=>'loai_spController@getadd_loaisp'
]);
Route::post('admin/save-sp',[
    'as'=>'save_loaisp',
    'uses'=>'loai_spController@post_loaisp'
]);

Route::get('admin/xoa-loai-san-pham',[
    'as'=>'delete_loaisp',
    'uses'=>'loai_spController@getdelete_loaisp'
]);

Route::get('admin/sua-loai-san-pham',[
    'as'=>'edit_loaisp',
    'uses'=>'loai_spController@getedit_loaisp'
]);

Route::get('admin/lietke-loai-san-pham',[
    'as'=>'show_loaisp',
    'uses'=>'loai_spController@getshow_loaisp'
]);
