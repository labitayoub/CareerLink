<?php

namespace App\Controllers;

use App\Classes\Users;
use App\Config\Database;
use App\Models\UserModel;
use App\Models\NewUserModel;
use PDO;

class AuthController{
    
    public function login($email, $pass){



        $memberModel = new UserModel();
        $member = $memberModel->findMember($email, $pass);
        if($member == null)
        {
            echo "member not found please check ...";
        }
        else{


            if($member->getRolee() == "Administrateur")
            {
                header('Location: ../users/dashboard.php');
                exit();
            }
            else if($member->getRolee() == "Recruteur")
            {
              header("Location: ../users/recruteur.php");
              exit();
            }
            else if($member->getRolee() == "Candidat")
            {
              header("Location: ../users/candidat.php");
              exit();
            }
        }
    }

    public function register($nom, $prenom, $email, $pass, $rolee) {
        $NewUserModel = new NewUserModel();
        $NewUserModel->addMember($nom, $prenom, $email, $pass, $rolee);
    }

}
