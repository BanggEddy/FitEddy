<?php

// Initialisation
class Entrainement
{
    private $id;
    private $nom;
    private $comment;
    private $photo;
    private $details;

    function getId()
    {
        return $this->id;
    }
    function getNom()
    {
        return $this->nom;
    }
    function getComment()
    {
        return $this->comment;
    }
    function getDetails()
    {
        return $this->details;
    }
    function getPhoto()
    {
        return $this->photo;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    function setNom($nom)
    {
        $this->nom = $nom;
    }
    function setComment($comment)
    {
        $this->comment = $comment;
    }
    function setPhoto($photo)
    {
        $this->photo = $photo;
    }
    function setDetails($details)
    {
        $this->details = $details;
    }

    // Fonction permettant d'afficher
    public static function afficherTous()
    {
        $req = MonPdo::getInstance()->prepare("select * from entrainement");
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'entrainement');
        $req->execute();
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }

    //Fonction pour la recherche
    public static function Recherche()
    {
        $recherche = strtoupper($_POST['recherche']);
        $req = MonPdo::getInstance()->prepare("select * from entrainement where upper (nom) like '%$recherche%'");
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'entrainement');
        $req->execute();
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }

    //Fonction pour l'ajout
    public static function ajouter(Entrainement $entrainement)
    {
        $req = MonPdo::getInstance()->prepare("INSERT INTO entrainement(nom, comment, photo, details) VALUES(:nom, :comment, :photo, :details)");
        $getnom = $entrainement->getNom();
        $req->bindParam('nom', $getnom);
        $getcomment = $entrainement->getComment();
        $req->bindParam('comment', $getcomment);
        $getphoto = $entrainement->getPhoto();
        $req->bindParam('photo', $getphoto);
        $getdetails = $entrainement->getDetails();
        $req->bindParam('details', $getdetails);
        $nb = $req->execute();
        return $nb;
    }

    //Trouver un Entrainement selon l'id
    public static function trouverUnEntrainement($id)
    {
        $req = MonPdo::getInstance()->prepare("SELECT * from entrainement WHERE id=:id");
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'entrainement');
        $req->bindParam('id', $id);
        $req->execute();
        $leResultat = $req->fetchAll();
        return $leResultat;
    }

    //Fonction pour la modification
    public static function modification(Entrainement $entrainement)
    {
        $req = MonPdo::getInstance()->prepare("UPDATE entrainement SET nom=:nom, comment=:comment, photo=:photo, details=:details WHERE id=:id");
        $getid = $entrainement->getId();
        $req->bindParam('id', $getid);
        $getnom = $entrainement->getNom();
        $req->bindParam('nom', $getnom);
        $getcomment = $entrainement->getComment();
        $req->bindParam('comment', $getcomment);
        $getphoto = $entrainement->getPhoto();
        $req->bindParam('photo', $getphoto);
        $getdetails = $entrainement->getDetails();
        $req->bindParam('details', $getdetails);
        $nb = $req->execute();
        return $nb;
    }

    //Fonction pour la suppression
    public static function suppression(Entrainement $entrainement)
    {
        $req = MonPdo::getInstance()->prepare("DELETE FROM entrainement WHERE id=:id");
        $getid = $entrainement->getId();
        $req->bindParam('id', $getid);
        $nb = $req->execute();
        return $nb;
    }
}
