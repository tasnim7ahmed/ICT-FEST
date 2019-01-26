<?php

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
use App\MathOlympiad;
use App\IctOlympiad;




Route::get('/', function () {
    return view('front_end/welcome');
})->name('front');

Route::get('/events', function () {
    return view('front_end/events');
})->name('events');

Route::get('/events/math_olympiad', function () {
    return view('front_end/mo');
})->name('mo');

Route::get('/events/math_olympiad_selected', function () {
    $mo = MathOlympiad::all();
    return view('front_end/selected_mo')->with('mos',$mo);
})->name('selected_mo');


Route::get('/events/ict_olympiad', function () {
    return view('front_end/io');
})->name('io');

Route::get('/events/ict_olympiad_selected', function () {
    $io = IctOlympiad::all();
    return view('front_end/selected_io')->with('ios',$io);
})->name('selected_io');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register_mo', 'MathOlympiadController@create')->name('register_mo')->middleware('auth');
Route::get('/mo_list', 'MathOlympiadController@index')->name('mo_list')->middleware('auth');
Route::post('/mo_list', 'MathOlympiadController@store')->name('store_mo')->middleware('auth');
Route::get('/delete_mo/{id}','MathOlympiadController@delete')->middleware('auth');



Route::post('/events/math_olympiad', 'MathOlympiadController@store_front')->name('store_mo_front');



Route::get('/register_io', 'IctOlympiadController@create')->name('register_io')->middleware('auth');
Route::get('/io_list', 'IctOlympiadController@index')->name('io_list')->middleware('auth');
Route::post('/io_list', 'IctOlympiadController@store')->name('store_io')->middleware('auth');
Route::get('/delete_io/{id}','IctOlympiadController@delete')->middleware('auth');

Route::post('/events/ict_olympiad', 'IctOlympiadController@store_front')->name('store_io_front');