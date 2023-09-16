<?php

namespace mvc\core;

class validation{



public static function clean_input($input)
{

  return strip_tags(htmlspecialchars(htmlentities(trim($input))));
}

public static function empty_inputs($input){
    if(empty($input)){
        return true;
    }
}

public static function valid_email($email)
{
    if( filter_var($email,FILTER_VALIDATE_EMAIL)){
        filter_var($email,FILTER_SANITIZE_EMAIL);
        return true;
    }else{
        return false;
    }
    
}
    

public static function input_length($value,$length_min,$length_max)
{
    if((strlen($value) > $length_min && strlen($value) < $length_max )){
        return true;
    }else{
        return false;
    }

}


public static function input_string($value)
{
    if(ctype_alpha($value)){
        return true;
    }else{
        return false;
    }
}


public static function hash_pass($passowrd)
{
    return password_hash($passowrd,PASSWORD_DEFAULT);
}
   
}