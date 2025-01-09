<?php

class OffreCandidatStatus {
    private $id;
    private $Users_id;
    private $Offre_id;
    private $date_postulation;

    public function __construct($id, $Users_id, $Offre_id, $date_postulation) {
        $this->id = $id;
        $this->Users_id = $Users_id;
        $this->Offre_id = $Offre_id;
        $this->date_postulation = $date_postulation;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsersId() {
        return $this->Users_id;
    }

    public function setUsersId($Users_id) {
        $this->Users_id = $Users_id;
    }

    public function getOffreId() {
        return $this->Offre_id;
    }

    public function setOffreId($Offre_id) {
        $this->Offre_id = $Offre_id;
    }

    public function getDatePostulation() {
        return $this->date_postulation;
    }

    public function setDatePostulation($date_postulation) {
        $this->date_postulation = $date_postulation;
    }
}

