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
Route::get('/post', function () {
    return view('post');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/iteminsert',function(){
//     DB::insert('insert into item(no,type,brand,model,specification,amount,qty)value(?,?,?,?,?,?,?)',[1,'Laptop','Thunderobot','911MT','15.6 inc / i5 11gen / 16gb / 512gb / GTX1650',2150000,1]);
// });
