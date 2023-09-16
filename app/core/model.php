<?php
namespace mvc\core;

use Dcblogdev\PdoWrapper\Database;

class model extends Database{
    
    public function __construct() {
        $this->db();
    }

    protected function db(){

        $options = [
            //required
            'username' => DB_USER,
            'database' => DB_NAME,
            //optional
            'password' => DB_PASS,
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => DB_HOST,
            'port' => '3306'
        ];
        $db = new Database($options);
        return $db ;
    }

    
}