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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WelcomeController@index');

Route::get('/about', 'WelcomeController@about');

Route::get('/service', 'WelcomeController@service');

Route::get('/doctor', 'WelcomeController@doctor');

Route::get('/department', 'WelcomeController@department');

Route::get('/pricing', 'WelcomeController@pricing');

Route::get('/gallery', 'WelcomeController@gallery');

Route::get('/blog', 'WelcomeController@blog');

Route::get('/single_blog', 'WelcomeController@single_blog');

Route::get('/contact', 'WelcomeController@contact');









