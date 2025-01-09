<?php
namespace App\Classes;


class Users {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $pass;
    private $rolee;

    public function __construct($id, $nom, $prenom, $email, $pass, $rolee) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->pass = $pass;
        $this->rolee = $rolee;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPass() {
        return $this->pass;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function getRolee() {
        return $this->rolee;
    }

    public function setRolee($rolee) {
        $this->rolee = $rolee;
    }
}
