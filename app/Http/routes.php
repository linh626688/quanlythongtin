<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
// Route::get('lien-he', ['as' => 'getLienhe', 'uses' => 'WellcomeController@get_lienhe']);
// Route::post('lien-he', ['as' => 'postLienhe', 'uses' => 'WellcomeController@post_lienhe']);

Route::get('send-mail', ['as' => 'getMail', 'uses' => 'MailController@getMail']);
Route::post('send-mail', ['as' => 'postMail', 'uses' => 'MailController@postMail']);
