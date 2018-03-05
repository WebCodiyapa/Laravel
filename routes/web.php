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

Route::get('/', 'FrontpageController@index')->name('home.page');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::middleware('admin')->group(function () {
//    Route::get('/home', 'HomeController@index')->name('home');
//    dd('testr');
Route::get('/admin', 'Admin\HomeController@index')->name('admin');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::get('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
//});

Route::get('facebook/redirect', 'Auth\LoginController@redirectToFacebook')->name('fb.login');
Route::get('facebook/callback', 'Auth\LoginController@handleFacebookCallback');
Route::get('instagram/redirect', 'Auth\LoginController@redirectToInstagram')->name('ig.login');
Route::get('instagram/callback', 'Auth\LoginController@handleInstagramCallback');


Route::get('pin', 'FrontpageController@pin')->name('pin');
Route::get('pin/single/{id}', 'PinController@single')->name('pin-single');
Route::post('/pin-fav-remove/{id}', 'UserFavotitesController@removeFromFavorite')->name('listings.favourites.delete');
Route::post('/pin-fav/{id}', 'UserFavotitesController@addToFavorite');

Route::get('place', 'PlaceController@getAddPlace')->name('place');
Route::post('add/place', 'PlaceController@postAddPlace')->name('add.place');

Route::get('profile', 'ProfileController@viewProfile')->name('profile');
Route::get('profile/setting', 'ProfileController@setting')->name('setting');
Route::get('profile/invite/friend', 'ProfileController@invateFriend')->name('invate-friend');
Route::get('profile/setting', 'ProfileController@getSetting')->name('setting');
Route::get('profile/edit', 'ProfileController@getEdit')->name('edit');
Route::post('edit/store', 'ProfileController@postEdit')->name('post.edit');
Route::post('edit/image', 'ProfileController@editImage')->name('image.edit');
Route::post('profile/setting/save', 'ProfileController@postSetting')->name('setting.save');
Route::get('help/contact', 'ProfileController@helpContact')->name('contact');
Route::post('user/note', 'ProfileController@userSaveNote')->name('user-note');
Route::get('profile/feedback', 'ProfileController@writFeedback')->name('profile.feedback');
Route::get('profile/favorites', 'ProfileController@UserFavorites')->name('profile.favorites');