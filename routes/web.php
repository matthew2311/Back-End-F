<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::middleware('admin')->group(function(){
    Route::get('/create', 'BookController@create')->name('create');
    Route::post('create', 'BookController@showForm')->name('createForm');
    Route::get('/mybook', 'BookController@ViewMyBook')->name('ViewMyBook');
    Route::get('/update/{id}', 'BookController@UpdateForm')->name('UpdateForm');
    Route::patch('/update/{id}', 'BookController@ShowUpdateForm')->name('Update');
    Route::delete('/delete/{id}', 'BookController@DeleteBuku')->name('DeleteBuku');
});

Route::middleware('auth')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/view', 'BookController@ViewAll')->name('ViewAll');
    Route::get('/view/{id}', 'BookController@ViewBook')->name('ViewBook');
    Route::get('/mail', 'BookController@SendMail')->name('SendMail');
});

