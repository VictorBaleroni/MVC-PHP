<?php

$routes = [
    '/' => 'HomeController@index',
    '/user' => 'UserController@index',
    '/create' => 'UserController@create',
    '/edit/{id}' => 'UserController@edit',
    '/update/{id}' => 'UserController@update',
    '/delete/{id}' => 'UserController@delete'
];
