<?php


class UserController{

    public function index(){
        echo 'USER';
    }
    public function edit($id = null){
        if(is_numeric($id)){
            echo $id;
            
        }
    }
}