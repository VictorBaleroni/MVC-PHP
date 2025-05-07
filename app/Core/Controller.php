<?php

namespace App\Core;

class Controller{
    public function model($model){
        require '../App/Model/'.$model.'.php';
        $classe = 'App\\Model\\'. $model;
        return new $classe;
    }

    public function view(string $view, $data = []){
        require '../App/Views/'. $view .'.php';
    }

    public function pageNotFound(){
        return $this->view('error');
    }
}
