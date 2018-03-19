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

Route::group(['namespace' => 'Frontend'], function() {

    // Route::get('', 'HomeController@index');

    Route::get('', 'HomeController@home');

    Route::resource('/agenda', 'AgendaController',
                    ['only' => ['index']]);

    Route::resource('/doener', 'DoerController',
                    ['only' => ['index', 'create', 'store', 'update', 'show']]);

    Route::get('/doener/{id}/edit', function($id){
        $user = \App\User::find($id);

        return view('frontend.doer.edit', compact('user'));
    })->middleware('checkUserEquality');

    Route::get('/doener/{id}/edit-wachtwoord', function($id){
        $user = \App\User::find($id);

        return view('frontend.doer.edit-password', compact('user'));
    })->middleware('checkUserEquality');

    Route::put('/doener/{id}/edit-wachtwoord', 'DoerController@editPassword');

    Route::resource('/wat-is-de-experimenteerbuurt', 'AboutUsController',
                    ['only' => ['index']]);

    Route::resource('/inspiratie', 'InspirationController',
                    ['only' => ['index']]);

    Route::resource('/nieuws', 'PostController',
                    ['only' => ['index']]);

    Route::resource('/contact', 'ContactController',
                    ['only' => ['index']]);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
