<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

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
//Route::resource('user','App\Http\Controllers\ManagementUserController');
Route::get('user', [ManagementUserController::class, 'index']);
//Route::get('user','App\Http\Controllers\ManagementUserController@index');
