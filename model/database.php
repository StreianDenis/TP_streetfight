<?php
define("HOST", "localhost");
define("DBNAME", "streetfight");
define("LOGIN", "root"); 
define("PASSWORD", ""); 
class database
{
    protected $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=utf8', LOGIN, PASSWORD);
        } catch (Exception $ex) {
            $ex->getMessage();
        }
    }

    public function __destruct()
    {
        $this->db = NULL;
    }
}
