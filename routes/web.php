<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


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
    Auth::login();

 return redirect('login');
});

Route::get('/logout', function () {
    Auth::logout();

 return redirect('login');
});



Auth::routes();


Route::get('/home', 'ConversationsController@index')->name('conversation');
Route::get('/acceuil','HomeController@acceuil');
Route::get('/call','HomeController@call');
Route::post('/call','HomeController@joinCall');
Route::get('/contact','HomeController@contact');
Route::get('/meeting','HomeController@meeting');
Route::resource('/chat','ChatController');
Route::resource('/programmer_reunion','ReunionController');

Route::resource('/events', 'EventsController');

Route::get('/conversations/{user}','ConversationsController@show')->name('conversations.show');
Route::post('/conversations/{user}','ConversationsController@store');

Route::resource('gestion','UserController');