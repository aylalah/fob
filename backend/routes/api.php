 <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::group([

    'middleware' => 'api',

], function () {
    // AUTH
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::get('me', 'App\Http\Controllers\AuthController@me');
    // Route::get('me2', 'App\Http\Controllers\AuthController@me2');
    Route::post('signup', 'App\Http\Controllers\AuthController@signup');
    Route::get('activatAccount/{id}', 'App\Http\Controllers\AuthController@activatAccount');

    // Auth::routes(['verify' => true]);

    // HOME
    Route::get('generalinfo', 'App\Http\Controllers\HomeController@generalinfo');
    Route::get('gettalentBaner', 'App\Http\Controllers\HomeController@gettalentBaner');
    Route::get('aboutus', 'App\Http\Controllers\HomeController@aboutus');
    Route::get('talentcrew', 'App\Http\Controllers\HomeController@talentcrew');
    Route::get('getActivities', 'App\Http\Controllers\HomeController@getActivities');
    Route::get('getInterview', 'App\Http\Controllers\HomeController@getInterview');
    Route::get('getTalent/{id}', 'App\Http\Controllers\HomeController@getTalent');
    Route::get('ourTeam', 'App\Http\Controllers\HomeController@ourTeam');

});
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
