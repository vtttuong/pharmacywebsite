<?php

class DB{
    
    public $conn;

    protected $DB_HOST = "localhost";
    protected $USER = "phpmyadmin";
    protected $PASSWORD = "Hoanglongle2402@";
    protected $DB_NAME = "Assignment";
    protected $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
    
    function __construct(){
        $DSN = "mysql:host = " . $this->DB_HOST . ";dbname=" . $this->DB_NAME;
        try{
            $this->conn = new PDO($DSN,$this->USER,$this->PASSWORD,$this->options);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    function __destruct(){
        $this->conn = NULL;
    }
}

?>