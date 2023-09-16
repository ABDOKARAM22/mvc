<?php
namespace mvc\controllers;

use mvc\core\controller;
use mvc\core\handel;
use mvc\core\session;
use mvc\core\validation;
use mvc\models\user;
class usercontroller extends controller {

public function profile()
    {
        new session;
        $user = new user;
        $data=$user->select_all_users();
        
        $this->get_view("user/profile",["title"=>"User Profile","data"=>$data]);
        
    }

public function insert_user(){

    new validation ;
    new session ;
    new handel;
    new user;
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['submit'])) {
            foreach ($_POST as $key => $vlue){
                $$key = validation::clean_input($vlue);
            }

                if(validation::empty_inputs($name) || validation::empty_inputs($email) || validation::empty_inputs($password) || validation::empty_inputs($repassword)){
                    session::set("all","All Fields Is Required..");              
                }elseif((validation::input_length($name,4,15))===false){
                    handel::set_error("name","The Name Must Be More Than 4 Letters And Less Than 15 Letters..");
                }elseif((validation::input_string($name))===false){
                    handel::set_error("name","The Name Must Consist Of Letters Only..");
                }elseif((validation::valid_email($email))===false){
                    handel::set_error("email","Please Enter A Valid Email..");
                }elseif($password !== $repassword){
                    handel::set_error("pass","The passwords is not the same..");
                }

                if(empty(session::get("all"))  && empty(session::get("name"))  && empty(session::get("email")) && empty(session::get("pass"))){

                  $pass_hashing = validation::hash_pass($password);
                  $repass_hashing = validation::hash_pass($repassword);
                    
                    // $this->insert_user($name,$email,$pass_hashing,$repass_hashing);
                    session::set("user",$name);
                    handel::set_success("The Registration Is Done..");
                    header("location: ../home/index");
                }else{
                    header("location: ../home/register");
                }
                
            }
        }
        
        
        public function login(){
            new session;
            $model= new user;
          $email =  $_POST['email'];
          $password =  $_POST['password'];
        //   $data = $model->login_user($email,$password);
          
          if(isset($data)){
            foreach($data as $item){
              $id = $item['id'];
              $hash_password = $item['password'];
            }
            }

            if(password_verify($password,$hash_password)){
                session::set('user',$id);
                header("location: ../home/index");
            }else{
                session::set('login',"The Password Or Email Is Rowng");
                header("location: ../home/login");
            }

        }

        public function logout(){
            new session;
            if(session::get('user')){
                session::stop();
                header("location: ../home/login");
            }else{
            header("location: ../home/login");
            }
    }

}