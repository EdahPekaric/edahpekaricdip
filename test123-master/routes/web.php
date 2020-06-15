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
Route::get('/partneri', function () {
    return view('partners');
});
Route::get('/kontakt', function () {
    return view('contact');
});
Route::get('/onama', function () {
    return view('about');
});
Route::get('/karte', function () {
    return view('tickets');
});

Route::prefix('admin')->middleware('is_admin')->group(function(){
    Route::resource('schedules', 'SchedulesController');
});

Route::prefix('admin')->middleware('is_admin')->group(function(){
    Route::resource('trains', 'TrainsController');
});

Route::prefix('admin')->middleware('is_admin')->group(function(){
    Route::resource('destinations', 'DestinationsController');
});

Route::get('/user/tickets/search', ['uses' => 'TicketsController@search','as' => 'tickets.search']);
Route::get('user/tickets/searchResults', 'TicketsController@searchResults');

Route::prefix('user')->group(function(){
    Route::resource('tickets', 'TicketsController');
});



//Route::resource('admin.trains','TrainsController')->shallow();

//Route::resource('trains', 'TrainsController')->names([
//    'create' => 'admin.trains.create',
//    'update' => 'admin.trains.edit',
//    'index' => 'admin.trains.index',
//    'show' => 'admin.trains.view',
//]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
