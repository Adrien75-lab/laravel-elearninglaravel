<?php

use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PricingController;
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

Route::get('/', 'MainController@home')->name('main.home');


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
Route::get('/instructor/course/{id}/edit', 'InstructorController@edit')->name('instructor.edit');
Route::put('/instructor/course/{id}/update', 'InstructorController@update')->name('instructor.update');
Route::get('/instructor/course/{id}/destroy', 'InstructorController@destroy')->name('instructor.destroy');
Route::get('/instructor/course/{id}/pricing', 'PricingController@pricing')->name('pricing.index');
Route::post('/instructor/course/{id}/pricing/store/', 'PricingController@store')->name('pricing.store');
Route::get('/instructor/courses/{id}/curriculum', 'CurriculumController@index')->name('instructor.curriculum.index');
Route::get('/instructor/courses/{id}/curriculum/add', 'CurriculumController@create')->name('instructor.curriculum.create');
Route::post('/instructor/courses/{id}/curriculum/store', 'CurriculumController@store')->name('instructor.curriculum.store');
