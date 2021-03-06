<?php

use Illuminate\Http\Request;

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

Route::group(['domain' => 'admin.'.env('MAIN_DOMAIN'), 'namespace' => 'Api\Admin', 'prefix' => 'v0'], function() {
    Route::post('login', 'AuthController@login');

    Route::group(['middleware' => 'jwt.auth'], function(){
        $methodAllow = ['index', 'show', 'store', 'update', 'destroy'];

        Route::get('user', 'AuthController@user');
        Route::post('logout', 'AuthController@logout');

        Route::post('upload-image', 'MediaController@uploadImage');
        Route::resource('events', 'EventController')->only($methodAllow);
        Route::resource('authors', 'AuthorController')->only($methodAllow);
        Route::resource('about-us', 'AboutUsController')->only($methodAllow);
        Route::resource('join-us', 'JoinUsController')->only($methodAllow);
        Route::resource('instructors', 'InstructorController')->only($methodAllow);
        Route::resource('courses', 'CourseController')->only($methodAllow);
        Route::resource('categories', 'CategoryController')->only($methodAllow);
        Route::resource('research-developments', 'ResearchController')->only($methodAllow);
        Route::resource('products', 'ProductController')->only($methodAllow);
        Route::resource('data-scientists', 'DataScientistController')->only($methodAllow);
        Route::resource('comments', 'CommentController')->only(['index', 'destroy']);
        Route::resource('banners', 'BannerController')->only($methodAllow);

        Route::get('setups', 'SetupController@show');
        Route::put('setups', 'SetupController@update');
    });


});
