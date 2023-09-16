<?php
namespace mvc\core;

class handel extends session{

    public static function set_error($key,$message)
    {
        session::set($key,$message);
    }
    
    public static function set_success($message)
    {
        session::set("success",$message);
    }
    
    public static function showerror($key)
    {
        if(session::get($key)){                              
            return "<div class='form-group'><div class='alert alert-danger' role='alert'><h5>".session::get($key)."</h5></div></div>";
        }
        
    }

    public static function showsuccess(){
        if(session::get('success')){
            return "<div class='form-group'><div class='alert alert-success' role='alert'><h5>".session::get('success')."<h3></div></div>";
        }
    }
}