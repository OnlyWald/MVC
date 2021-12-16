<?php 

class LoginController extends Controller{

    public function index(){
        return $this->view('login');
    }
    
    public function cek(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $cek = $this->model('User')->check($username, $password);
        
        if($cek > 0){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            return $this->view('beranda');
        }else{
            return $this->view('login');
        }
    }
} 