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

Route::get('/candidate', function () {
    return view('pages.candidate');
});

Route::get('/partners', function () {
    return view('pages.partners');
});

Route::get('/policy', function () {
    return view('pages.policy');
});
Route::get('/talents', function () {
    return view('pages.talents');
});

Route::get('/term-condition', function () {
    return view('pages.term-condition');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/search', function () {
    return view('pages.search');
});
Route::get('/candidate-d', function () {
    return view('pages.candidate-d');
});

// Route::get('/register-user', function () {
//     return view('auth.register-user');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register-user', 'HomeController@getTalentCat');

