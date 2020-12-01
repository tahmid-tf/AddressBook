<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Address;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::middleware('auth')->group(function (){

    Route::get('/users',[Address::class,'index'])->name('user');

    Route::get('/add',function (){
        return view('add');

    })->name('add');

    Route::post('/post',[Address::class,'store'])->name('address.post');

    Route::delete('delete/{id}',[Address::class,'destroy'])->name('address.delete');

    Route::get('edit/{address}',[Address::class,'edit'])->name('address.edit');

    Route::put('/post/{id}',[Address::class,'update'])->name('address.update');

    Route::get('/logout',[Address::class,'logout'])->name('logout.route');


});


