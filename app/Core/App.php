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
        $URL_ARRAY = $this->parseUrl();
        $this->getController($URL_ARRAY);

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl(){
        $REQUEST_URI = explode('/', substr($this->uri, 1));
        $REQUEST_URI[0] = '/'.$REQUEST_URI[0];
        return $REQUEST_URI;
    }

    private function getController($url){
        if( !empty($url[0]) && isset($url[0]) ){
            foreach($this->routes as $path => $sepController){
                if($path == $url[0]){
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

    private function getParams(){
        
    }
}