<?php 

class HomeController extends Controller{

    public function index(){
        $users = $this->model('User')->index();
        return $this->view('home',['users' => $users]);
    }

} 