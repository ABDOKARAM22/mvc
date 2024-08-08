<?php
namespace mvc\controllers;

use mvc\core\controller;
use mvc\core\handel;
use mvc\core\session;


class homecontroller extends controller{
    
    public function __construct()
    {
        new session;
    }
    
    function index()
    {
        $name=session::get('user');
        $this->get_view("home/index",["title"=>"Home page","message"=>"Welcome ","name"=>$name]);
        
    }

    function register()
    {
        $error_all = handel::showerror("all");
        $error_email = handel::showerror("email");    
        $error_name = handel::showerror("name");
        $error_pass = handel::showerror("pass");
        $success= handel::showsuccess();
        $this->get_view("home/register",["title"=>"Register","error_name"=>$error_name,"error_email"=>$error_email,
        "error_all"=>$error_all,"success"=>$success, "error_pass"=>$error_pass]);
        
    }
    
    function Login()
    {
        $error=handel::showerror('login');
        $this->get_view("home/login",["title"=>"Login",'error'=>$error]);
        
    }


    
}
