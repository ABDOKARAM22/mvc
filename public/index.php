<?php

require_once ("../vendor/autoload.php");
define("DS",DIRECTORY_SEPARATOR);
define('ROOT',dirname(__DIR__));
define('APP',ROOT.DS."app".DS);
define('CONTROLLER', APP.DS."controllers");
define('CORE', APP.DS."core".DS);
define('MODEL', APP.DS."models".DS);
define('VIEW', APP.DS."views".DS);


define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","mvc");



$newapp= new \mvc\core\app;


