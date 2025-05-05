<?php

use App\Core\Controller;

class UserController extends Controller{
    public function index(){
       $this->view('user/index');
    }
    public function edit($id = null){
        if(is_numeric($id)){
            echo $id;
        }
    }
}