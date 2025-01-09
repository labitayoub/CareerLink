<?php
namespace App\Config;


use PDO;
use PDOException;

class Database{
    private $host="localhost";
    private $dbname="CareerLink";
    private $user="root";
    private $pass="";
    private $connexion;


    public function connect()
    {
 
        try {
            $this->connexion = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass  );            
            return $this->connexion;
        } catch (PDOException $th) {
            die("connexion faild".$th->getMessage());
        }
    }
}