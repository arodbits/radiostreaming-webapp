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

Route::get('/', 'WelcomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('promotions','PromotionController');
Route::resource('radio','RadioController');

Route::post('api/access_token', function(){
	return Response::json(Authorizer::issueAccessToken());
});

Route::get('api/promotions', ["before" =>'oauth', function(){
	$promotions = App\Promotion::all();
	$length = $promotions->count();

	return Response::json(["promotions" => $promotions]);
}]);

Route::get('api/radio/{id}', ["before" =>'oauth', function($id){
	$radio = \App\Radio::find($id);
	return Response::json($radio);
}]);
