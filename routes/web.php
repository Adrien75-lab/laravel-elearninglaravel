<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', 'MainController@home');


Auth::routes();

Route::get('/logout', function () {
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/instructor/overview', 'InstructorController@index')->name('instructor.index');
Route::get('/instructor/new', 'InstructorController@create')->name('instructor.create');
Route::post('/instructor/store', 'InstructorController@store')->name('instructor.store');
