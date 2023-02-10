<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', ['as' => 'home', function () {
    return view('index');
}]);

$router->get('users', ['as' => 'users', function () {
    return view('users');

}]);


$router->get('users/list', ['as' => 'usersList', 'uses' => "UserController@show"]);

$router->post('users/add', ['as' => 'usersAdd', 'uses' => "UserController@add"]);
$router->get('users/list/{id}', ['as' => 'usersShowOne', 'uses' => "UserController@showOne"]);
$router->put('users/update/{id}', ['as' => 'usersUpdate', 'uses' => "UserController@update"]);
$router->delete('users/delete/{id}', ['as' => 'userDelete', 'uses' => "UserController@delete"]);

