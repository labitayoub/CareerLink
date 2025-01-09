<?php


class OffreTag {
    private $Offre_id;
    private $tag_id;

    public function __construct($Offre_id, $tag_id) {
        $this->Offre_id = $Offre_id;
        $this->tag_id = $tag_id;
    }

    public function getOffreId() {
        return $this->Offre_id;
    }

    public function setOffreId($Offre_id) {
        $this->Offre_id = $Offre_id;
    }

    public function getTagId() {
        return $this->tag_id;
    }

    public function setTagId($tag_id) {
        $this->tag_id = $tag_id;
    }
}
