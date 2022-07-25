<?php
use App\Http\Controllers\ImageController;
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

Route::get('insert','App\Http\Controllers\MyInsertController@insertform');
Route::post('create', 'App\Http\Controllers\MyInsertController@insert');
Route::get('view-records','App\Http\Controllers\MyViewController@index');

Route::get('/image', [ImageController::class,'index'])->name('image.index');
Route::post('/image', [ImageController::class,'store'])->name('image.store');

Route::get('test', function () {
    return view('test');
});


Route::get('/', function () {
    return view('welcome');
});
