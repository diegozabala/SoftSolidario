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


Route::get('/', function () {
    return view('login');
});

Route::get('home', function () {
    return view('home');
});


*/

Route::get('/',['as' => 'front.index','uses' => 'FrontController@index']);
Route::resource('front','FrontController');

Route::group(['prefix'=>'solidario','middleware'=>'auth'],function(){

  Route::get('/', ['as' => 'solidario.index', function () {
      return view('index');
  }]);

  Route::resource('users','UsersController');
  Route::get('user/{id}/destroy',['uses'=>'UsersController@destroy',
                                  'as' => 'solidario.users.destroy']);


  Route::resource('patrimonios','PatrimoniosController');
  Route::get('patrimonio/{id}/destroy',['uses'=>'PatrimoniosController@destroy',
                                  'as' => 'solidario.patrimonios.destroy']);

  Route::resource('orgs','OrganizacionesController');
  Route::get('organizacion/{id}/destroy',['uses'=>'OrganizacionesController@destroy',
                                  'as' => 'solidario.orgs.destroy']);

});

Route::get('solidario/auth/login',['uses'=>'Auth\AuthController@getLogin',
                                'as' =>'solidario.auth.login']);
Route::post('solidario/auth/login',['uses'=>'Auth\AuthController@postLogin',
                              'as' =>'solidario.auth.login']);
Route::get('solidario/auth/logout',['uses'=>'Auth\AuthController@logout',
                                'as' =>'solidario.auth.logout']);

/*
Route::get('login','Auth\AuthController@getLogin');
Route::post('login',['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout',['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

//Registrar Routes
Route::get('register','Auth\AuthController@getRegister');
Route::post('register',['as' => 'auth\register', 'uses' => 'Auth\AuthController@postRegister']);
//Route::get('/','HomeController@index');
Route::get('home','HomeController@index');


Route::group(['prefix' => 'admin'], function() {

    //Ejemplo de ruta: http://localhost/SoftSolidario/public/admin/organizaciones/1
        //Route::get('organizaciones/{id}', ['uses' => 'OrganizacionesController@show', 'as' => 'admin.organizaciones.show']);
  Route::resource('org','OrgsController');
});
*/
