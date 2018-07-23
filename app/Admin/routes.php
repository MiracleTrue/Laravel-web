<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->get('users', 'UsersController@index')->name('admin.users.index');



//    $router->resource('example', ExampleController::class);
//    $router->get('example', 'ExampleController@index')->name('example.index');
//    $router->get('example/{id}', 'ExampleController@show')->name('example.show');
//    $router->get('example/create', 'ExampleController@create')->name('example.create');
//    $router->get('example/{id}/edit', 'ExampleController@edit')->name('example.edit');
//    $router->post('example', 'ExampleController@store')->name('example.store');
//    $router->put('example/{id}', 'ExampleController@update')->name('example.update');
//    $router->delete('example/{id}', 'ExampleController@destroy')->name('example.destroy');
});
