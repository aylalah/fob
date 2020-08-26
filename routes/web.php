<?php

use Illuminate\Support\Facades\Route;
use App\Talent_Profile;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

use App\Investor_Profile;
use App\UserCategory;
use App\TalentCategory;
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
    $cand=Talent_Profile::orderBy('id','desc')->join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.address_1','users.email','users.count_f')->take(6)->get(); 
     $invest=Investor_Profile::join('users','investor__profiles.user_id','=','users.id')
            ->select('investor__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->take(9)->get();
    return view('welcome')->with('cand',$cand)->with('invest',$invest);
});


Route::get('/partners', function () {
    $invest=Investor_Profile::join('users','investor__profiles.user_id','=','users.id')
            ->select('investor__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->paginate(1);
    return view('pages.partners')->with('invest',$invest);
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


// Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/register-user', 'HomeController@getTalentCat');
Route::POST('/register-user', 'HomeController@registeruser');

// Route::get('/register-invest', 'HomeController@register');
Route::POST('/register-invest', 'HomeController@registerstore');

Route::POST('/search-partner', 'HomeController@searchpartner');
Route::POST('/search-candidate', 'HomeController@searchcandidate');

Route::get('/candidate-category/{id}', 'HomeController@candidatedetail');

Route::get('/add-like', 'HomeController@addlike');
Route::get('/add-favour', 'HomeController@addfavour');
Route::get('/remove-like/{id}', 'HomeController@removelike');
Route::get('/candidate',  'HomeController@candidate');
Route::get('/favourite', 'HomeController@favour');