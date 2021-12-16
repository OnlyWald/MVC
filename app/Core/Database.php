<?php

class Database{

    private static $_instance = null;
    private $mysqli;

    public function __construct(){
        $this->mysqli = new mysqli('localhost', 'root', 'root', 'kelompok10') or die('Koneksi error');
    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new Database();
        }

        return self::$_instance;
    }

    public function index($table){
        $reply  = [];
        $query  = "SELECT * FROM $table";
        $result = $this->mysqli->query($query); 

        while($row = $result->fetch_assoc()){
            $reply[] = $row;
        }

        return $reply;
    }

    public function insert($table, $username, $password, $level){
        $query  = "INSERT INTO $table (username, password, user_level) VALUES ('$username', '$password', '$level')";
        $this->mysqli->query($query); 
    }

    public function show($table, $username, $password){
        $query  = "select * from $table where username='$username' and password='$password'";
        $result = $this->mysqli->query($query); 
        $cek = mysqli_num_rows($result);

        return $cek;
    }
}