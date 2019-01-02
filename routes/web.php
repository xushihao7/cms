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
/*Route::get("/user","User\user@test");*/
//Route::get("/user/{id}","User\user@index");
Route::get("/user/add","User\user@add");
Route::get("/user/update/{id}","User\user@update");
Route::get("/user/del/{id}","User\user@del");
Route::get("/user/list","User\user@list");


