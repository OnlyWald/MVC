<?php 

class User{
    private $_db;

    public function __construct()
    {
        $this->_db = Database::getInstance();
    }

    public function index(){
        return $this->_db->index('users');
    }

    public function insert($username, $password, $level){
        return $this->_db->insert('users', $username, $password, $level);
    }

    public function check($username, $password){
        return $this->_db->show('users', $username, $password);
    }
}