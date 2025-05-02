<?php

namespace App\Core;

use App\Url\Uri;

class App{
    protected $routes;
    protected $uri;
    protected $controller;

    public function __construct($routes){
        $this->routes = $routes;
        $this->uri = Uri::uri();
        $this->getController($this->uri);


    }

    private function getController($url){
        if( !empty($url) && isset($url) ){
            foreach($this->routes as $path => $sepController){
                if($path == $url){
                    [$controller, $method] = explode('@', $sepController);
                    require '../App/Controllers/'.$controller.'.php';
                    $newCotroller = new $controller();
                    $newCotroller->$method();
                }
            }
        }
    }
}
