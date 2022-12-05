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


/*employe*/


Route::get('employe','App\Http\Controllers\EmployeController@getEmploye');
Route::post('/addemploye','App\Http\Controllers\EmployeController@addEmploye');
Route::delete('/deleteemploye/{id}','App\Http\Controllers\EmployeController@deleteEmploye'); 
Route::patch('/updateemploye/{id}','App\Http\Controllers\EmployeController@updateEmploye'); 
Route::get('/getoneemploye/{id}','App\Http\Controllers\EmployeController@getOneEmploye');
