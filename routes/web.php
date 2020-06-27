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

Auth::routes(['register' => true]);

Route::middleware('auth')->group(function () {

    

/* PUBLIC ROUTES -- START -- */
    
Route::middleware('throttle:180|360,1')->group(function () {
    // Home
    Route::get('/' , 'PmHomesController@index')->name('pm.home');
    // Do not touch to this shit.
    Route::get('/home', 'HomeController@index')->name('home');
    // Categories
    Route::get('/categories', 'PmCategoriesController@index')->name('pm.categories.index');
    Route::get('/categories/{slug}', 'PmCategoriesController@show')->name('pm.categories.show');
    // Series
    Route::get('/series', 'PmSeriesController@index')->name('pm.series.index');
    Route::get('/series/{slug}', 'PmSeriesController@show')->name('pm.series.show');
    Route::get('/series/{slug}/{post}', 'PmSeriesController@post')->name('pm.series.post');
    // Posts
    Route::get('/posts', 'PmPostsController@index')->name('pm.posts.index');
    Route::get('/posts/{slug}', 'PmPostsController@show')->name('pm.posts.show');
    // Human
    Route::get('/about', 'HumansController@about')->name('human.about');
    Route::get('/portfolio', 'HumansController@portfolio')->name('human.portfolio');
    Route::get('/contact', 'PmContactsController@show')->name('pm.contacts.show');
    // My Account
    Route::get('/myaccount', 'PmMyAccountsController@index')->name('pm.myaccount.index');
    Route::get('/myaccount/basicsettings', 'PmMyAccountsController@basicsettings')->name('pm.myaccount.basicsettings');
    Route::get('/myaccount/newpassword', 'PmMyAccountsController@newpassword')->name('pm.myaccount.newpassword');
    Route::get('/myaccount/dangerous', 'PmMyAccountsController@dangerous')->name('pm.myaccount.dangerous');
});

    Route::middleware('throttle:5|10,1')->group(function () {
        Route::post('/puttingacomment/{postslug}', 'PmCommentsController@store')->name('pm.comments.store');
    });
/* PUBLIC ROUTES -- END -- */

    // Web Manager
    Route::get('/webmanager', 'WmHomeController@index')->name('wm.home');
    Route::get('/webmanager/categories', 'WmCategoriesController@index')->name('wm.categories.index');
    Route::get('/webmanager/categories/create', 'WmCategoriesController@create')->name('wm.categories.create');
    Route::post('/webmanager/categories', 'WmCategoriesController@store')->name('wm.categories.store');
    Route::delete('/webmanager/categories/{category}', 'WmCategoriesController@destroy')->name('wm.categories.destroy');

    Route::get('/webmanager/series', 'WmSeriesController@index')->name('wm.series.index');
    Route::get('/webmanager/series/create', 'WmSeriesController@create')->name('wm.series.create');
    Route::post('/webmanager/series', 'WmSeriesController@store')->name('wm.series.store');
    Route::delete('/webmanager/series/{id}', 'WmSeriesController@destroy')->name('wm.series.destroy');

    Route::get('/webmanager/posts', 'WmPostsController@index')->name('wm.posts.index');
    Route::get('/webmanager/posts/create', 'WmPostsController@create')->name('wm.posts.create');
    Route::post('/webmanager/posts', 'WmPostsController@store')->name('wm.posts.store');
    Route::get('/webmanager/posts/{id}', 'WmPostsController@show')->name('wm.posts.show');
    Route::delete('/webmanager/posts/{id}', 'WmPostsController@destroy')->name('wm.posts.destroy');

    Route::get('/webmanager/tags', 'WmTagsController@index')->name('wm.tags.index');
    Route::get('/webmanager/tags/create', 'WmTagsController@create')->name('wm.tags.create');
    Route::post('/webmanager/tags', 'WmTagsController@store')->name('wm.tags.store');
    Route::delete('/webmanager/tags/{id}', 'WmTagsController@destroy')->name('wm.tags.destroy');

    Route::get('/webmanager/users', 'WmUsersController@index')->name('wm.users.index');
    Route::delete('/webmanager/users/{user}', 'WmUsersController@destroy')->name('wm.users.destroy');
    //Route::get('/webmanager/testing', 'WmPostsController@testing');
    Route::get('/webmanager/testing', 'TestController@index');
    Route::post('/autocomplete/fetch', 'WmPostsController@fetch')->name('autocomplete.fetch');
});