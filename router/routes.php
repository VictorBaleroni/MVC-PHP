<?php

$routes = [
    '/' => 'HomeController@index',
    '/user' => 'UserController@index',
    '/create' => 'UserController@create',
    '/user/{id}/edit' => 'UserController@edit',
    '/update/{id}' => 'UserController@update',
    '/delete/{id}' => 'UserController@delete'
];
