<?php
/*
include '../../Model/traveloffer.php';
include '../../config.php';
include '../view/backoffice/addoffer2.php';


class TravelOfferController {   //khedma
    
    
    public function showTravelOffer($offer) {

        echo "<h3>Détails de l'offre :</h3>";
        $offer->show();
    }
}

class TravelOfferController
{
    
    public function listOffre()
    {
        $sql = "SELECT * FROM traveloffer";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }



    public function addOffre($offer){
        $sql = "INSERT INTO traveloffer (title,id,destination, departure_date, return_date, price, disponibility, category) 
                VALUES (:title, :id, :destination, :departure_date, :return_date, :price, :disponibility, :category)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'title' => $offer['title'],
                'id' => $offer['id'],
                'destination' => $offer['destination'],
                'departure_date' => $offer['departure_date'],
                'return_date' => $offer['return_date'],
                'price' => $offer['price'],
                'disponibility' => $offer['disponibility'],
                'category' => $offer['category']
            ]);
        }catch(Exception $e){
            die('Error: ' . $e->getMessage());
        }
    }
}*/








include '../../Model/traveloffer.php';
include '../../config.php';
class TravelOfferController
{
    public function showTravelOffer($offer)
    {
        $offer->show();
    }


    public function listOffre()
    {
        $sql = "SELECT * FROM traveloffer";
        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function addOffer($offer)
    {
        $sql = "INSERT INTO traveloffer (titre, destination,departure_date,return_date, price, disponible, categorie) VALUES (:titre, :destination, :departure_date, :return_date, :price, :disponible, :categorie)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'titre' => $offer->getTitre(),
                'destination' => $offer->getDestination(),
                'departure_date' => $offer->getDateDepart(),
                'return_date' => $offer->getDateRetour(),
                'price' => $offer->getPrix(),
                'disponible' => $offer->getDisponible(),
                'categorie' => $offer->getCategorie()
            ]);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function deleteOffer($id)
    {
        $sql = "DELETE FROM traveloffer WHERE id = :id"; 
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id' => $id]); 
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    
    
}




?>