<?php

use App\Core\Controller;

class HomeController extends Controller{
    public function index(){
        $this->view('home/index');
    }
}
