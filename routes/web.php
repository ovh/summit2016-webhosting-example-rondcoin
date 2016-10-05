<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group( array( 'domain' => 'rondcoin.ovh'), function(){
  Route::get('/', function () {
      return redirect('/offer');
  });

  Auth::routes();

  Route::get('/home', 'HomeController@index');
  Route::get('/tokens', 'HomeController@tokens');
  Route::resource('offer', 'OfferController');
});
