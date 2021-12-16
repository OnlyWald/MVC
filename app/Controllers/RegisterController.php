<?php 

class RegisterController extends Controller{

    public function index(){

        return $this->view('register');
    }

    public function insert(){

            $username   = $_POST['username'];
            $password   = $_POST['password'];
            $level       = $_POST['level'];

            $this->model('User')->insert($username, $password, $level);
            return $this->view('login');
    }
} 