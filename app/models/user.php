<?php

namespace mvc\models;
use mvc\core\model;
class user extends model{

    function select_all_users(){
        $data= $this->db()->rows("select * FROM user");
        return $data;
    }

    function insert_user($name,$email,$password,$repassword){
        $id = $this->db()->insert('user', ['name' => $name, 'email' => $email, 'password'=>$password, 'repassword'=>$repassword]);
        if(isset($id)){
            return true;
        }
    }

    function login_user($email,$password){
        $data = $this->db()->row("select id , passowrd FROM user WHERE email = :email ", ['email' => $email]);
        return $data;
    }

}
