<?php

class Offre {
    private $id;
    private $titre;
    private $description;
    private $typecontrat;
    private $salaire;
    private $lieu;
    private $categorie_id;
    private $Users_id;

    public function __construct($id, $titre, $description, $typecontrat, $salaire, $lieu, $categorie_id, $Users_id) {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->typecontrat = $typecontrat;
        $this->salaire = $salaire;
        $this->lieu = $lieu;
        $this->categorie_id = $categorie_id;
        $this->Users_id = $Users_id;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getTypecontrat() {
        return $this->typecontrat;
    }

    public function setTypecontrat($typecontrat) {
        $this->typecontrat = $typecontrat;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function setLieu($lieu) {
        $this->lieu = $lieu;
    }

    public function getCategorieId() {
        return $this->categorie_id;
    }

    public function setCategorieId($categorie_id) {
        $this->categorie_id = $categorie_id;
    }

    public function getUsersId() {
        return $this->Users_id;
    }

    public function setUsersId($Users_id) {
        $this->Users_id = $Users_id;
    }
}

