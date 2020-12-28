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
/**หน้าเเรก*/
Route::get('/','BasicController@home');
/**หน้า about*/
Route::get('about','BasicController@about');
/**หน้า service*/
Route::get('service','BasicController@service');
/**หน้า portfolio*/
Route::get('portfolio','BasicController@portfolio');
/**หน้า blog*/
Route::get('blog','BasicController@blog');
/**หน้า contact*/
Route::get('contact','BasicController@contact');
/**หน้า login*/
Route::get('login','BasicController@login');


/**อ่านข้อมูล*/
Route::get('employees','BasicController@employees');


