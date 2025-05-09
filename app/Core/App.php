<?php

namespace App\Core;

use App\Url\Uri;

class App{
    private $routes;
    private $uri;
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct($routes){
        $this->routes = $routes;
        $this->uri = Uri::uri();
        $this->getController($this->uri);
        $this->getParams($this->parseUrl());
        
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl(){
        $REQUEST_URI = explode('/', substr($this->uri, 1));
        return $REQUEST_URI;
    }

    private function getController($url){
        if( !empty($url) ){
            foreach($this->routes as $path => $sepController){
                $pattern = '#^'.preg_replace('/{id}/', '(\w+)', $path).'$#';
                
                if(preg_match($pattern, $url, $matches)){
                    array_shift($matches);
                    [$this->controller, $this->method] = explode('@', $sepController);
                    break;
                }
            }
        }
        $controllerPath = '../App/Controllers/' . $this->controller . '.php';

        if(file_exists($controllerPath)){
            require $controllerPath;
            
            if(class_exists($this->controller)){
                $this->controller = new $this->controller();
            }else{
                throw new \Exception("O Controller {$this->controller} não encontrado.");    
            }
        }else{
            throw new \Exception("Arquivo não encontrado.");
        }
    }

    private function getParams($url){
        if(count($url) > 1){
            $this->params = array_slice($url, 1);
        }
    }
}
