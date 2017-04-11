<?php

class Login_Model extends Model
{
    public function __construct(){
        parent::__construct();
    }

    public function run()
    {
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $sth = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = :password");


        $sth->execute(array(
            ':login' => $login,
            ':password' => $password
        ));
        $data = $sth->fetchAll();

        $count = $sth->rowCount();
        if($count>0){
            Session::init();
            Session::set('loggedIn', true);
            header("location: ../dashboard");
        } else{
            header('location: ../login');
        }

        print_r($data);
    }

}