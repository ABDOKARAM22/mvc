<?php
namespace mvc\core;
class controller{

    public function get_view($path,$parms){
        extract($parms);
        require_once (VIEW.$path.".php");
    }

}
