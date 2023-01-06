<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostController;

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

// Route::get("addmore","HomeController@addMore");
// Route::post("addmore","HomeController@addMorePost");
Route::get('addmore',  [HomeController::class, 'addMorePost'])->name('addMorePost');
Route::get('addmore',  [HomeController::class, 'addMore'])->name('addMore');


// Route::get("addmore", [HomeController::class, 'addMore']);
// Route::post("addMorePost", [StudentController::class, 'addMorePost']);

 
Route::resource('companies', CompanyController::class);

// Route::get('postCreate','PostController@postCreate');
Route::post('postData','PostController@postData')->name('postData');





Route::get('postCreate',\App\Http\Controllers\PostController::class . '@postCreate');
Route::post('postData',\App\Http\Controllers\PostController::class . '@postData')->name('postData');
