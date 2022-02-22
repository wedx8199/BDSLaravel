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
    return redirect()->route('index');
});
Route::get('index',[
	'as'=>'index',
	'uses'=>'Controller@index'
]);
Route::get('allpost',[
	'as'=>'allpost',
	'uses'=>'Controller@allpost'
]);






Route::get('type2',[
	'as'=>'type2',
	'uses'=>'Controller@type2'
]);
Route::get('type3',[
	'as'=>'type3',
	'uses'=>'Controller@type3'
]);

Route::get('sortpriceup',[
	'as'=>'sortpriceup',
	'uses'=>'SortController@sortpriceup'
]);
Route::get('sortpricedown',[
	'as'=>'sortpricedown',
	'uses'=>'SortController@sortpricedown'
]);
Route::get('sortareaup',[
	'as'=>'sortareaup',
	'uses'=>'SortController@sortareaup'
]);
Route::get('sortareadown',[
	'as'=>'sortareadown',
	'uses'=>'SortController@sortareadown'
]);
Route::get('sortlatest',[
	'as'=>'sortlatest',
	'uses'=>'SortController@sortlatest'
]);











Route::get('city/{id}',[
	'as'=>'city',
	'uses'=>'Controller@city'
]);
Route::get('citytype2/{id}',[
	'as'=>'citytype2',
	'uses'=>'Controller@citytype2'
]);
Route::get('sortpriceupcity/{id}',[
	'as'=>'sortpriceupcity',
	'uses'=>'SortController@sortpriceupcity'
]);
Route::get('sortpricedowncity/{id}',[
	'as'=>'sortpricedowncity',
	'uses'=>'SortController@sortpricedowncity'
]);
Route::get('sortareaupcity/{id}',[
	'as'=>'sortareaupcity',
	'uses'=>'SortController@sortareaupcity'
]);
Route::get('sortareadowncity/{id}',[
	'as'=>'sortareadowncity',
	'uses'=>'SortController@sortareadowncity'
]);
Route::get('sortlatestcity/{id}',[
	'as'=>'sortlatestcity',
	'uses'=>'SortController@sortlatestcity'
]);



Route::get('quan/{id}',[
	'as'=>'quan',
	'uses'=>'Controller@quan'
]);
Route::get('quantype2/{id}',[
	'as'=>'quantype2',
	'uses'=>'Controller@quantype2'
]);
Route::get('sortpriceupquan/{id}',[
	'as'=>'sortpriceupquan',
	'uses'=>'SortController@sortpriceupquan'
]);
Route::get('sortpricedownquan/{id}',[
	'as'=>'sortpricedownquan',
	'uses'=>'SortController@sortpricedownquan'
]);
Route::get('sortareaupquan/{id}',[
	'as'=>'sortareaupquan',
	'uses'=>'SortController@sortareaupquan'
]);
Route::get('sortareadownquan/{id}',[
	'as'=>'sortareadownquan',
	'uses'=>'SortController@sortareadownquan'
]);
Route::get('sortlatestquan/{id}',[
	'as'=>'sortlatestquan',
	'uses'=>'SortController@sortlatestquan'
]);




Route::get('viewpost/{id}',[
	'as'=>'viewpost',
	'uses'=>'Controller@viewpost'
]);











Route::get('login',[
	'as'=>'login',
	'uses'=>'Controller@login'
]);
Route::post('login',[
	'as'=>'login',
	'uses'=>'Controller@postLogin'
]);
Route::get('logout',[
	'as'=>'logout',
	'uses'=>'Controller@logout'
]);










Route::get('/getQuan/{id}','SortController@getQuan')->name('getQuan');
Route::get('/getDist/{id}','SortController@getDist')->name('getDist');










Route::get('search',[
	'as'=>'search',
	'uses'=>'SortController@search'
]);








Route::get('contact',[
	'as'=>'contact',
	'uses'=>'Controller@contact'
]);
Route::post('contact',[
	'as'=>'contact',
	'uses'=>'Controller@postaddrequest'
]);

Route::get('viewpersonal/{id}',[
	'as'=>'viewpersonal',
	'uses'=>'Controller@viewpersonal'
]);





Route::group(['middleware' => ['auth','nolock']], function() {






Route::get('addpost',[
	'as'=>'addpost',
	'uses'=>'Controller@addpost'
]);
Route::post('postaddpost',[
	'as'=>'postaddpost',
	'uses'=>'Controller@postaddpost'
]);





Route::get('viewedit/{id}',[
	'as'=>'viewedit',
	'uses'=>'Controller@viewedit'
]);




Route::get('editpost/{id}',[
	'as'=>'editpost',
	'uses'=>'Controller@editpost'
]);
Route::post('posteditpost/{id}',[
	'as'=>'posteditpost',
	'uses'=>'Controller@posteditpost'
]);

Route::get('delpic/{id}',[
	'as'=>'delpic',
	'uses'=>'Controller@delpic'
]);
Route::get('soldpost/{id}',[
	'as'=>'soldpost',
	'uses'=>'Controller@soldpost'
]);


Route::get('delpost/{id}',[
	'as'=>'delpost',
	'uses'=>'Controller@delpost'
]);








Route::get('useredit/{id}',[
	'as'=>'useredit',
	'uses'=>'Controller@useredit'
]);
Route::post('postuseredit/{id}',[
	'as'=>'postuseredit',
	'uses'=>'Controller@postuseredit'
]);


Route::get('changepass',[
	'as'=>'changepass',
	'uses'=>'Controller@changepass'
]);
Route::post('changepass',[
	'as'=>'changepass',
	'uses'=>'Controller@postChangepass'
]);










//Route::group(['middleware' => 'role:admin'], function() {




//});











});










Route::group(['middleware' => ['auth','admin']], function() {




Route::get('signin',[
	'as'=>'signin',
	'uses'=>'Controller@signin'
]);
Route::post('signin',[
	'as'=>'signin',
	'uses'=>'Controller@postSignin'
]);



Route::get('admin',[
	'as'=>'admin',
	'uses'=>'AdminController@admin_index'
]);
Route::get('manage_bds',[
	'as'=>'manage_bds',
	'uses'=>'AdminController@manage_bds'
]);



Route::get('manage_city',[
	'as'=>'manage_city',
	'uses'=>'AdminController@manage_city'
]);
Route::post('postaddcity',[
	'as'=>'postaddcity',
	'uses'=>'AdminController@postaddcity'
]);
Route::post('postadmincityedit/{id}',[
	'as'=>'postadmincityedit',
	'uses'=>'AdminController@postadmincityedit'
]);
Route::get('delcity/{id}',[
	'as'=>'delcity',
	'uses'=>'AdminController@delcity'
]);



Route::get('manage_district',[
	'as'=>'manage_district',
	'uses'=>'AdminController@manage_district'
]);
Route::post('postadddistrict',[
	'as'=>'postadddistrict',
	'uses'=>'AdminController@postadddistrict'
]);
Route::post('postadminquanedit/{id}',[
	'as'=>'postadminquanedit',
	'uses'=>'AdminController@postadminquanedit'
]);
Route::get('deldistrict/{id}',[
	'as'=>'deldistrict',
	'uses'=>'AdminController@deldistrict'
]);



Route::get('manage_type',[
	'as'=>'manage_type',
	'uses'=>'AdminController@manage_type'
]);
Route::post('postaddtype',[
	'as'=>'postaddtype',
	'uses'=>'AdminController@postaddtype'
]);
Route::post('postadmintypeedit/{id}',[
	'as'=>'postadmintypeedit',
	'uses'=>'AdminController@postadmintypeedit'
]);
Route::get('deltype/{id}',[
	'as'=>'deltype',
	'uses'=>'AdminController@deltype'
]);


Route::get('manage_user',[
	'as'=>'manage_user',
	'uses'=>'AdminController@manage_user'
]);
Route::post('postadminuseredit/{id}',[
	'as'=>'postadminuseredit',
	'uses'=>'AdminController@postadminuseredit'
]);
Route::get('deluser/{id}',[
	'as'=>'deluser',
	'uses'=>'AdminController@deluser'
]);
Route::get('lockuser/{id}',[
	'as'=>'lockuser',
	'uses'=>'AdminController@lockuser'
]);
Route::get('unlockuser/{id}',[
	'as'=>'unlockuser',
	'uses'=>'AdminController@unlockuser'
]);






Route::get('manage_dt',[
	'as'=>'manage_dt',
	'uses'=>'AdminController@manage_dt'
]);
Route::get('doanhthutime',[
	'as'=>'doanhthutime',
	'uses'=>'AdminController@doanhthutime'
]);




Route::get('manage_lh',[
	'as'=>'manage_lh',
	'uses'=>'AdminController@manage_lh'
]);
Route::get('delreq/{id}',[
	'as'=>'delreq',
	'uses'=>'AdminController@delreq'
]);


Route::get('export',[
	'as'=>'export',
	'uses'=>'ExportController@export'
]);











});










