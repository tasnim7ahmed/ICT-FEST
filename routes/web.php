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
use App\business;
use App\FIFA19;
use App\Siege;
use App\Dota;
use App\Poster;
use App\Appdev;
use App\Hackathon;



Route::get('/', function () {
    return view('front_end/welcome');
})->name('front');

Route::get('/events', function () {
    return view('front_end/events');
})->name('events');

Route::get('/payment', function () {
    return view('front_end/payment');
})->name('payment');



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
    $io = IctOlympiad::where('selected','True')->get();
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

Route::get('/events/it_business', function () {
    $business = Business::all();
    return view('front_end/business')->with('businesses',$business);
})->name('business');

Route::get('/events/it_business_selected', function () {
    $business = Business::where('selected','True')->get();
    return view('front_end/selected_business')->with('businesses',$business);
})->name('selected_business');

Route::get('/events/fifa19', function () {
    return view('front_end/fifa');
})->name('fifa');


Route::get('/events/fifa19_selected', function () {
    $fifa = FIFA19::where('selected','True')->get();
    return view('front_end/selected_fifa')->with('fifas',$fifa);
})->name('selected_fifa');

Route::get('/events/siege', function () {
    return view('front_end/siege');
})->name('siege');

Route::get('/events/siege_selected', function () {
    $siege = Siege::where('selected','True')->get();
    return view('front_end/selected_siege')->with('sieges',$siege);
})->name('selected_siege');

Route::get('/events/dota', function () {
    return view('front_end/dota');
})->name('dota');

Route::get('/events/dota_selected', function () {
    $dota = Dota::where('selected','True')->get();
    return view('front_end/selected_dota')->with('dotas',$dota);
})->name('selected_dota');

Route::get('/events/poster', function () {
    return view('front_end/poster');
})->name('poster');

Route::get('/events/poster_selected', function () {
    $poster = Poster::where('selected','True')->get();
    return view('front_end/selected_poster')->with('posters',$poster);
})->name('selected_poster');

Route::get('/events/appdev', function () {
    return view('front_end/appdev');
})->name('appdev');

Route::get('/events/appdev_selected', function () {
    $appdev = Appdev::where('selected','True')->get();
    return view('front_end/selected_appdev')->with('appdevs',$appdev);
})->name('selected_appdev');

Route::get('/events/hackathon', function () {
    return view('front_end/hackathon');
})->name('hackathon');

Route::get('/events/hackathon_selected', function () {
    $hackathon = Hackathon::where('selected','True')->get();
    return view('front_end/selected_hackathon')->with('hackathons',$hackathon);
})->name('selected_hackathon');



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





Route::get('/register_business', 'BusinessController@create')->name('register_business')->middleware('auth');
Route::get('/business_list', 'BusinessController@index')->name('business_list')->middleware('auth');
Route::post('/business_list', 'BusinessController@store')->name('store_business')->middleware('auth');
Route::get('/delete_business/{id}','BusinessController@delete')->middleware('auth');
Route::get('/selection_done_business/{id}','BusinessController@selection')->middleware('auth');
Route::get('/payment_done_business/{id}','BusinessController@payment')->middleware('auth');

Route::post('/events/it_business', 'BusinessController@store_front')->name('store_business_front');

Route::post('/events/it_business_selected', 'BusinessController@upload')->name('business_upload');
Route::get('/business_download/{id}','BusinessController@download')->middleware('auth');






Route::get('/register_fifa', 'FIFA19Controller@create')->name('register_fifa')->middleware('auth');
Route::get('/fifa_list', 'FIFA19Controller@index')->name('fifa_list')->middleware('auth');
Route::post('/fifa_list', 'FIFA19Controller@store')->name('store_fifa')->middleware('auth');
Route::get('/delete_fifa/{id}','FIFA19Controller@delete')->middleware('auth');
Route::get('/selection_done_fifa/{id}','FIFA19Controller@selection')->middleware('auth');
Route::get('/payment_done_fifa/{id}','FIFA19Controller@payment')->middleware('auth');
Route::post('/events/fifa19', 'FIFA19Controller@store_front')->name('store_fifa_front');





Route::get('/register_siege', 'SiegeController@create')->name('register_siege')->middleware('auth');
Route::get('/siege_list', 'SiegeController@index')->name('siege_list')->middleware('auth');
Route::post('/siege_list', 'SiegeController@store')->name('store_siege')->middleware('auth');
Route::get('/delete_siege/{id}','SiegeController@delete')->middleware('auth');
Route::get('/selection_done_siege/{id}','SiegeController@selection')->middleware('auth');
Route::get('/payment_done_siege/{id}','SiegeController@payment')->middleware('auth');

Route::post('/events/siege', 'SiegeController@store_front')->name('store_siege_front');





Route::get('/register_dota', 'DotaController@create')->name('register_dota')->middleware('auth');
Route::get('/dota_list', 'DotaController@index')->name('dota_list')->middleware('auth');
Route::post('/dota_list', 'DotaController@store')->name('store_dota')->middleware('auth');
Route::get('/delete_dota/{id}','DotaController@delete')->middleware('auth');
Route::get('/selection_done_dota/{id}','DotaController@selection')->middleware('auth');
Route::get('/payment_done_dota/{id}','DotaController@payment')->middleware('auth');

Route::post('/events/dota', 'DotaController@store_front')->name('store_dota_front');







Route::get('/register_poster', 'PosterController@create')->name('register_poster')->middleware('auth');
Route::get('/poster_list', 'PosterController@index')->name('poster_list')->middleware('auth');
Route::post('/poster_list', 'PosterController@store')->name('store_poster')->middleware('auth');
Route::get('/delete_poster/{id}','PosterController@delete')->middleware('auth');
Route::get('/selection_done_poster/{id}','PosterController@selection')->middleware('auth');
Route::get('/payment_done_poster/{id}','PosterController@payment')->middleware('auth');

Route::post('/events/poster', 'PosterController@store_front')->name('store_poster_front');

Route::post('/events/poster_selected', 'PosterController@upload')->name('poster_upload');
Route::get('/poster_download/{id}','PosterController@download')->middleware('auth');






Route::get('/register_appdev', 'AppdevController@create')->name('register_appdev')->middleware('auth');
Route::get('/appdev_list', 'AppdevController@index')->name('appdev_list')->middleware('auth');
Route::post('/appdev_list', 'AppdevController@store')->name('store_appdev')->middleware('auth');
Route::get('/delete_appdev/{id}','AppdevController@delete')->middleware('auth');
Route::get('/selection_done_appdev/{id}','AppdevController@selection')->middleware('auth');
Route::get('/payment_done_appdev/{id}','AppdevController@payment')->middleware('auth');

Route::post('/events/appdev', 'AppdevController@store_front')->name('store_appdev_front');

// Route::post('/events/appdev_selected', 'AppdevController@upload')->name('appdev_upload');
Route::get('/appdev_download/{id}','AppdevController@download')->middleware('auth');






Route::get('/register_hackathon', 'HackathonController@create')->name('register_hackathon')->middleware('auth');
Route::get('/hackathon_list', 'HackathonController@index')->name('hackathon_list')->middleware('auth');
Route::post('/hackathon_list', 'HackathonController@store')->name('store_hackathon')->middleware('auth');
Route::get('/delete_hackathon/{id}','HackathonController@delete')->middleware('auth');
Route::get('/selection_done_hackathon/{id}','HackathonController@selection')->middleware('auth');
Route::get('/payment_done_hackathon/{id}','HackathonController@payment')->middleware('auth');

Route::post('/events/hackathon', 'HackathonController@store_front')->name('store_hackathon_front');