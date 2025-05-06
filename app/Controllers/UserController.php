<?php

use App\Core\Controller;
use App\Core\Request;
use App\Core\Redirect;

class UserController extends Controller{
    public function index(){
        $Users = $this->model('Users');
        $data = $Users->getAllUsers();
        $this->view('user/index', ['users' => $data]);
    }
    
    public function edit($id = null){
        if(is_numeric($id)){
            $Users = $this->model('Users');
            $data = $Users->getUserById($id);
            $this->view('user/edit', ['users' => $data]);
        }
    }

    public function update($id = null){
        if(is_numeric($id)){
            $Users = $this->model('Users');
            $Users->updateUser([
                'id' => $id,
                'name' => Request::input('name'),
                'email' => Request::input('email')
            ]);
            Redirect::back();
        }
        
    }
}