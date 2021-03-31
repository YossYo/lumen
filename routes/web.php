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

$router->group(['prefix' => 'api/'], function () use ($router) {



    //the route below is for creating a new Product
    $router->post('products/add', 'ProductController@createProduct');
    
    
    //the route below is for viewing one Product
    $router->get('products/view/{id}', 'ProductController@viewProduct');
    
    
    //the route below is for updating the information of a Product
    $router->put('products/edit/{id}', 'ProductController@updateProduct');
    
    
    //the route below is for deleting a Product from the database
    $router->delete('products/delete/{id}', 'ProductController@deleteProduct');
    
    
    //the route below is for viewing all Products
    $router->get('products/index', 'ProductController@index');
    
    
    });