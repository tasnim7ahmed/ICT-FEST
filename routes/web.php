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
use App\Programming;
use App\Project;



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
    $mo = MathOlympiad::where('selected','True')->get();
    return view('front_end/selected_mo')->with('mos',$mo);
})->name('selected_mo');


Route::get('/events/ict_olympiad', function () {
    return view('front_end/io');
})->name('io');

Route::get('/events/ict_olympiad_selected', function () {
    $io = IctOlympiad::all();
    return view('front_end/selected_io')->with('ios',$io);
})->name('selected_io');

Route::get('/events/programming_contest', function () {
    return view('front_end/pc');
})->name('pc');

Route::get('/events/programming_contest_selected', function () {
    $pc = Programming::where('selected','True')->get();
    return view('front_end/selected_pc')->with('pcs',$pc);
})->name('selected_pc');

Route::get('/events/project_showcasing', function () {
    return view('front_end/ps');
})->name('ps-go');



Route::get('/events/project_showcasing_selected', function () {
    $ps = Project::where('selected','True')->get();
    return view('front_end/selected_ps')->with('pss',$ps);
})->name('selected_ps');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register_mo', 'MathOlympiadController@create')->name('register_mo')->middleware('auth');
Route::get('/mo_list', 'MathOlympiadController@index')->name('mo_list')->middleware('auth');
Route::post('/mo_list', 'MathOlympiadController@store')->name('store_mo')->middleware('auth');
Route::get('/delete_mo/{id}','MathOlympiadController@delete')->middleware('auth');
Route::get('/selection_done_mo/{id}','MathOlympiadController@selection')->middleware('auth');
Route::get('/payment_done_mo/{id}','MathOlympiadController@payment')->middleware('auth');
Route::post('/events/math_olympiad', 'MathOlympiadController@store_front')->name('store_mo_front');



Route::get('/register_io', 'IctOlympiadController@create')->name('register_io')->middleware('auth');
Route::get('/io_list', 'IctOlympiadController@index')->name('io_list')->middleware('auth');
Route::post('/io_list', 'IctOlympiadController@store')->name('store_io')->middleware('auth');
Route::get('/delete_io/{id}','IctOlympiadController@delete')->middleware('auth');

Route::get('/selection_done_io/{id}','IctOlympiadController@selection')->middleware('auth');
Route::get('/payment_done_io/{id}','IctOlympiadController@payment')->middleware('auth');

Route::post('/events/ict_olympiad', 'IctOlympiadController@store_front')->name('store_io_front');







Route::get('/register_pc', 'ProgrammingController@create')->name('register_pc')->middleware('auth');
Route::get('/pc_list', 'ProgrammingController@index')->name('pc_list')->middleware('auth');
Route::post('/pc_list', 'ProgrammingController@store')->name('store_pc')->middleware('auth');
Route::get('/delete_pc/{id}','ProgrammingController@delete')->middleware('auth');
Route::get('/selection_done_pc/{id}','ProgrammingController@selection')->middleware('auth');
Route::get('/payment_done_pc/{id}','ProgrammingController@payment')->middleware('auth');

Route::post('/events/programming_contest', 'ProgrammingController@store_front')->name('store_pc_front');






Route::get('/register_ps', 'ProjectController@create')->name('register_ps')->middleware('auth');
Route::get('/ps_list', 'ProjectController@index')->name('ps_list')->middleware('auth');
Route::post('/ps_list', 'ProjectController@store')->name('store_ps')->middleware('auth');
Route::get('/delete_ps/{id}','ProjectController@delete')->middleware('auth');
Route::get('/selection_done_ps/{id}','ProjectController@selection')->middleware('auth');
Route::get('/payment_done_ps/{id}','ProjectController@payment')->middleware('auth');

Route::post('/events/project_showcasing', 'ProjectController@store_front')->name('store_ps_front');

