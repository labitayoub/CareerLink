<?php
namespace App\Models;

use App\Classes\Users;
use App\Config\Database;


use PDOException;
use PDO;

class NewUserModel {
    private $connexion;

    public function __construct() {
        $db = new Database();
        $this->connexion = $db->connect();
    }

    public function addMember($nom,$prenom, $email,$pass,$rolee) {

            $query = "INSERT INTO users (nom, prenom,email, pass,rolee  )
                        VALUES (:nom, :prenom,:email, :pass,:rolee );";
            
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->bindParam(':rolee', $rolee);

            try{

            $stmt->execute();

        } catch (PDOException $e) {
            return null; 
        }
    }
}

