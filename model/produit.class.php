<?php

// Initialisation
class Produit{
    private $id;
    private $nom;
    private $comment;
    private $photo;

    function getid() {
        return $this->id;
    }
    function getnom() {
        return $this->nom;
    }
    function getcomment() {
        return $this->comment;
    }
    function getphoto() {
        return $this->photo;
    }
    function setId($id) {
        $this->$id = $id;
    }
    function setNom($nom) {
        $this->$nom = $nom;
    }
    function setcomment($comment) {
        $this->$comment = $comment;
    }
    function setphoto($photo) {
        $this->$photo = $photo;
    }

    // Fonction permettant d'afficher
    public static function afficherTous()
    {
$req=MonPdo::getInstance()->prepare("select * from entrainement") ;
$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'entrainement') ;
$req->execute();
$lesResultats=$req->fetchAll();
return $lesResultats;
    }
}

?>