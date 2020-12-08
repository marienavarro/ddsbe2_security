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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users',['uses' => 'UserController@getUsers']);
});

$router->get('/users', 'UserController@index');             //get all data
$router->post('/users', 'UserController@addUser');          //add user to the database
$router->get('/users/{id}', 'UserController@show');          //find user by its specific id
$router->put('/users/{id}', 'UserController@update');       //put means all values in your table/usertable will/should be put value
$router->patch('/users/{id}', 'UserController@update');       //update specific info
$router->delete('/users/{id}', 'UserController@delete');    //delete record

$router->get('login', 'UserController@showlogin');      //loginpage
$router->post('validate', 'UserController@result');     //login button