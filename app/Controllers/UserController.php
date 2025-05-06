<?php

use App\Core\Controller;

class UserController extends Controller{
    public function index(){
        $Users = $this->model('Users');
        $data = $Users->getAllUsers();
        $this->view('user/index', ['users' => $data]);
    }
    public function edit($id = null){
        if(is_numeric($id)){

        }
    }
}