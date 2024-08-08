<?php
namespace mvc\core;
class app {

    private $controller="homecontroller";
    private $action="index";
    private $params=[];
    
  public  function __construct()
    {
        $this->Url();
        $this->render();
    }

    private function Url(){
        
        $url=trim($_SERVER['REQUEST_URI'],"/");
        $url=explode("/",$url,3);
        
        if(isset($url[0]) && !empty($url[0]) ){
            $this->controller = $url[0]."controller";
        }
        if(isset($url[1]) && !empty($url[1]) ){
            $this->action = $url[1];
        }
        if(isset($url[2]) && !empty($url[2]) ){
            $this->params = explode("/",$url[2]);
        }
    }

    private function render(){
        $controller="mvc\\controllers\\".$this->controller;

        if(class_exists($controller)){
            $controller=new $controller; 
            if(method_exists($controller,$this->action)){
                call_user_func_array([$controller,$this->action],$this->params);

            }else{

                echo "Not Found Method";
            }
        }else{
            echo "Not Found controller";
        }

    }

     
}