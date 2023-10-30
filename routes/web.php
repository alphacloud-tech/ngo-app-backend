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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth']], function () {
// });
Route::resource('slider', 'SliderController');
Route::resource('causes', 'CauseController');
Route::resource('causes-list-category', 'CauseCategoryController');

Route::post('/update-featured/{cause}', 'CauseController@updateFeatured');


Route::resource('partner', 'PartnerController');
Route::post('/activate/{partner}', 'PartnerController@activation');

Route::resource('event', 'EventController');
Route::resource('testimonial', 'TestimonialController');
Route::resource('volunteer', 'VolunteerController');
