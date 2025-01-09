<?php
namespace App\Models;

use App\Classes\Users;
use App\Config\Database;
use PDO;

class UserModel{
    private $connexion;


    public function __construct() {
            $db = new Database();
            $this->connexion = $db->connect();
    }

    public function findMember($email, $pass) {
        $query = "SELECT users.id, users.nom , users.prenom ,users.email, users.pass, users.rolee
                  FROM users 
                  WHERE users.email = :email AND users.pass = :pass";
 
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
    
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!$row){

                return null;
            }
            else{
                return new Users($row['id'],$row["nom"],$row["prenom"],$row["email"],$row["pass"],$row["rolee"]);

            }
    }
    
}