<?php

use Illuminate\Support\Facades\Route;
use App\Talent_Profile;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

use App\Investor_Profile;
use App\UserCategory;
use App\TalentCategory;
use App\Aboutus;
use App\Team;
use App\PrivacyPolicy;
use App\TeamCondition;
use App\Activities;
use App\CompanyCategory;
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

    $getApp= DB::table('app_setup')->where('app_setup.id','=', 1)->select('app_setup.app_url2')->get();
  

    $cand=Talent_Profile::orderBy('id','desc')->join('users','talent__profiles.user_id','=','users.id')
            ->select('talent__profiles.*', 'users.name', 'users.image','users.address_1','users.email','users.count_f')->take(6)->get(); 
     $invest=Investor_Profile::join('users','investor__profiles.user_id','=','users.id')
            ->select('investor__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->take(9)->get();
    $activities=Activities::orderBy('id','desc')->join('company_categories','activities.category_id','=','company_categories.id')->select('activities.*','company_categories.category_name')->where('activities.status','=','active')->take(9)->get();
    return view('welcome')->with('cand',$cand)->with('invest',$invest)->with('activities',$activities)->with('app_url',$getApp[0]);
});


Route::get('/partners', function () {
    $invest=Investor_Profile::join('users','investor__profiles.user_id','=','users.id')

            ->select('investor__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->paginate(12);
    return view('pages.partners')->with('invest',$invest);

    //         ->select('investor__profiles.*', 'users.name', 'users.image','users.email','users.count_f')->paginate(1);
    // return view('Pages.partners')->with('invest',$invest);

});

Route::get('/privacy-policy', function () {
    $p= PrivacyPolicy::first();
    return view('Pages.privacypolicy')->with('p',$p);
});

Route::get('/term-condition', function () {
    $t= TeamCondition::first();
    return view('Pages.term-condition')->with('t',$t);
});

Route::get('/about', function () {
       $abt=Aboutus::first();
         $team=Team::orderBy('id','desc')->get();
    return view('Pages.about')->with('abt',$abt)->with('team',$team);
});

Route::get('/contact', function () {
    return view('Pages.contact');
});

Route::get('/activity', function () {
     $act=Activities::orderBy('id','desc')->join('company_categories','activities.category_id','=','company_categories.id')->select('activities.*','company_categories.category_name')->where('activities.status','=','active')->paginate(20);
    return view('Pages.activities')->with('act',$act);
});

Route::get('/search', function () {
    return view('Pages.search');
});
Route::get('/candidate-d', function () {
    return view('Pages.candidate-d');
});

Route::get('/register-talent', function () {
    $talent_category = TalentCategory::orderBy('talentcategory_name', 'asc')->get();
    return view('auth.register-user')->with('getCat', $talent_category);
});

Route::get('/register-investor', function () {
    return view('auth.register');
});

// Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home2');

// Route::get('/register-user', 'HomeController@getTalentCat');
Route::POST('/register-user', 'HomeController@registeruser');

Route::POST('/register-sponsor', 'HomeController@registerstore');

Route::POST('/add-admin', 'AuthController@signup');
Route::POST('/update-user', 'AuthController@updatePassword');
Route::POST('/update-password', 'AuthController@updatePassword');
Route::get('/activateAccount/{id}', 'AuthController@activateAccount');

Route::POST('/search-partner', 'HomeController@searchpartner');
Route::POST('/search-candidate', 'HomeController@searchcandidate');
Route::get('/candidate-category/{id}', 'HomeController@candidatedetail');

Route::get('/add-like', 'HomeController@addlike');
Route::get('/add-favour', 'HomeController@addfavour');
Route::get('/remove-like/{id}', 'HomeController@removelike');
Route::get('/talents', 'HomeController@talents');
Route::get('/candidate',  'HomeController@candidate');
Route::get('/favourite', 'HomeController@favour');

//Admin Panel
Route::get('/myprofile', 'ProfileController@admin_profile');
Route::get('/admins', 'UsersController@admins');
Route::get('/admin-talents', 'UsersController@talents');
Route::get('/guests', 'UsersController@guests');
Route::get('/investors', 'UsersController@investors');
Route::get('/activities', 'ActivitiesController@index');
Route::get('/admin-policy', 'AboutusController@policy');
Route::get('/edit_activities/{id}', 'ActivitiesController@edit_activities');
Route::POST('/updateactivities', 'ActivitiesController@updateactivities');
Route::get('/delete_activities/{id}', 'ActivitiesController@delete_activities');
Route::get('/delete_actg/{id}', 'ActivitiesController@delete_actg');
Route::get('/policy', 'AboutusController@policy');
Route::get('/aboutus', 'AboutusController@aboutus');
Route::get('/company_category', 'CategoryController@company_category');
Route::get('/add_company_category', 'CategoryController@add_company_category');
Route::POST('/storecompanycategory', 'CategoryController@storecompany_category');

Route::get('/add_activities', 'ActivitiesController@add_activities');
Route::POST('/storeactivities', 'ActivitiesController@storeactivities');
Route::POST('/storeactgallery', 'ActivitiesController@storeactgallery');
Route::POST('/updateaboutus', 'AboutusController@updateaboutus');
Route::POST('/storeteam', 'AboutusController@storeteam');
Route::get('/add_team', 'AboutusController@add_team');
Route::POST('/updatepolicy', 'AboutusController@updatepolicy');
Route::POST('/updateteam', 'AboutusController@updateterm');
Route::get('/termcondition', 'AboutusController@teamcondition');