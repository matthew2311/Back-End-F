<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::delete('/delete', 'APIBookController@DeleteAPI');
Route::post('/create', 'APIBookController@showFormAPI');
Route::get('/view', 'APIBookController@ViewAllAPI');
Route::patch('/update/{id}' , 'APIBookController@ShowUpdateFormAPI');
