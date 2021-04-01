<?php

use App\Http\Controllers\SearchPeopleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect()->route("login");
});

Auth::routes(["reset" => false]); //login - register -verify
Route::post("/controllaUtente", "Auth\RegisterController@controllaUtente")->name("controllaUtente");

Route::group(['middleware' =>['auth']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/update_home', 'HomeController@update_home')->name('update_home');
    Route::get('/miPiace', 'HomeController@miPiace')->name('miPiace');
    Route::get('/add_like', 'HomeController@add_like')->name('add_like');
    Route::get('/remove_like', 'HomeController@remove_like')->name('remove_like');
    Route::get('/show_like', 'HomeController@show_like')->name('show_like');

    Route::get('/search_people', 'SearchPeopleController@index')->name('search_people');
    Route::post('/search_people', 'SearchPeopleController@do_search')->name('search_people.do_search');
    Route::post('/follow', 'SearchPeopleController@follow_people')->name('search_people.follow');
    Route::get('/unfollow', 'SearchPeopleController@unfollow_people')->name('search_people.unfollow');

    Route::get('/create_post', 'CreatePostController@index')->name('create_post');
    Route::post('/do_searchpost', 'CreatePostController@do_searchpost')->name('do_searchpost');
    Route::post('/do_createpost', 'CreatePostController@do_createpost')->name('do_createpost');


    /*Route::get('/refreshLike', 'HomeController@refreshLike')->name('refreshLike');
    Route::get('/like', 'HomeController@like')->name('like');
    Route::get('/list_like', 'HomeController@list_like')->name('list_like');*/
});
