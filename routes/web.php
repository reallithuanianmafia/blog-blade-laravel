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

/**
 * Login
 */
    Auth::routes(['register' => true]);
/**
 * Public Manager
 */
Route::get('/home', 'HomeController@index')->name('home');
Route::name('pm.')->group(function () {
        // Home
    Route::get('/' , 'PmHomesController@index')->name('home');
        // Do not touch to this shit.
    
        // Categories
    Route::get('/categories', 'PmCategoriesController@index')->name('categories.index');
    Route::get('/categories/{slug}', 'PmCategoriesController@show')->name('categories.show');
        // Series
    Route::get('/series', 'PmSeriesController@index')->name('series.index');
    Route::get('/series/{slug}', 'PmSeriesController@show')->name('series.show');
    Route::get('/series/{slug}/{post}', 'PmSeriesController@post')->name('series.post');
        // Posts
    Route::get('/posts', 'PmPostsController@index')->name('posts.index');
    Route::get('/posts/{slug}', 'PmPostsController@show')->name('posts.show');
        // Human
    Route::get('/about', 'HumansController@about')->name('human.about');
    Route::get('/portfolio', 'HumansController@portfolio')->name('human.portfolio');
    Route::get('/contact', 'PmContactsController@show')->name('contacts.show');

    Route::post('/puttingacomment/{postslug}', 'PmCommentsController@store')->name('pm.comments.store');
        // My Account
    Route::get('/myaccount', 'PmMyAccountsController@index')->name('myaccount.index');
    Route::get('/myaccount/basicsettings', 'PmMyAccountsController@basicsettings')->name('myaccount.basicsettings');
    Route::get('/myaccount/newpassword', 'PmMyAccountsController@newpassword')->name('myaccount.newpassword');
    Route::get('/myaccount/dangerous', 'PmMyAccountsController@dangerous')->name('myaccount.dangerous');
});
/**
 * Web Manager
*/
Route::name('wm.')->prefix('/webmanager/')->middleware(['auth', 'wmEntrance'])->group(function () {
    Route::get('', 'WmHomeController@index')->name('home');
    Route::get('categories', 'WmCategoriesController@index')->name('categories.index');
    Route::get('categories/create', 'WmCategoriesController@create')->name('categories.create');
    Route::get('categories/{slug}/edit', 'WmCategoriesController@edit')->name('categories.edit');
    Route::put('categories/{slug}/edit', 'WmCategoriesController@update')->name('categories.update');
    Route::post('categories', 'WmCategoriesController@store')->name('categories.store');
    Route::get('categories/{category}', 'WmCategoriesController@show')->name('categories.show');
    Route::delete('categories/{category}', 'WmCategoriesController@destroy')->name('categories.destroy');
    Route::get('series', 'WmSeriesController@index')->name('series.index');
    Route::get('series/create', 'WmSeriesController@create')->name('series.create');
    Route::get('series/{slug}/edit', 'WmSeriesController@edit')->name('series.edit');
    Route::put('series/{slug}/edit', 'WmSeriesController@update')->name('series.update');
    Route::post('series', 'WmSeriesController@store')->name('series.store');
    Route::delete('series/{id}', 'WmSeriesController@destroy')->name('series.destroy');

    Route::get('posts', 'WmPostsController@index')->name('posts.index');
    Route::get('posts/create', 'WmPostsController@create')->name('posts.create');
    Route::get('posts/{slug}/edit', 'WmPostsController@edit')->name('posts.edit');
    Route::put('posts/{slug}/edit', 'WmPostsController@update')->name('posts.update');
    Route::post('posts', 'WmPostsController@store')->name('posts.store');
    Route::get('posts/{id}', 'WmPostsController@show')->name('posts.show');
    Route::delete('posts/{id}', 'WmPostsController@destroy')->name('posts.destroy');

    Route::get('tags', 'WmTagsController@index')->name('tags.index');
    Route::get('tags/create', 'WmTagsController@create')->name('tags.create');
    Route::post('tags', 'WmTagsController@store')->name('tags.store');
    Route::delete('tags/{id}', 'WmTagsController@destroy')->name('tags.destroy');

    Route::get('users', 'WmUsersController@index')->name('users.index');
    Route::get('users/all', 'WmUsersController@all')->name('users.all');
    Route::get('users/users', 'WmUsersController@users')->name('users.users');
    Route::get('users/contentcreators', 'WmUsersController@contentcreators')->name('users.contentcreators');
    Route::get('users/administrators', 'WmUsersController@administrators')->name('users.administrators');
    Route::delete('users/{user}', 'WmUsersController@destroy')->name('users.destroy');
    
    Route::get('testing', 'WmHomeController@test');
});





