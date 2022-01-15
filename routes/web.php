<?php

use App\Profiles;
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

//ダッシュボード表示
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/topindex', 'HomeController@index')->name('topindex');

Route::get('/study', function(){
    return view('study');
});
Route::get('/loan', 'LoanController@index');
//storeに書き換えた12/19
Route::post('/loan', 'LoanController@store');
Route::resource('user', 'UserController')->only(['index', 'edit', 'update', 'destroy'])->middleware('auth');
Route::get('/user/index', 'UserController@index');
Route::get('/user/edit', 'UserController@edit');
Route::post('user/edit', 'UserController@update');
Route::get('/debtor/post', 'DebtorController@index');
Route::post('/debtor/post', 'DebtorController@store');