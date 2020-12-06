<?php
use App\Models\Teacher;
use App\Models\Cur;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::resource('/teacher', 'App\Http\Controllers\TeacherController');
Route::resource('/cur', 'App\Http\Controllers\CurController');
Route::resource('/user', 'App\Http\Controllers\UserController');