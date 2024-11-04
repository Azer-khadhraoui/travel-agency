<?php


class traveloffer{
    private $id;
    private $titre;
    private $destination;
    private $datedep;
    private $dateret;
    private $prix;
    private $disponible;
    private $categorie;


    public function __construct($id,$titre, $destination, $prix, $datedep,$dateret,$disponible,$categorie) {
        $this->titre = $titre;
        $this->destination = $destination;
        $this->id = $id;
        $this->prix = $prix;
        $this->datedep = $datedep;
        $this->dateret = $dateret;
        $this->categorie = $categorie;
        $this->disponible = $disponible;
    }

    
    public function show() {
        echo "<table border='2'>";
        echo "<tr><th>Titre</th><th>Destination</th><th>id</th><th>Prix</th><th>Date de départ</th><th>Date de retour</th><th>categorie</th><th>disponibilité</th></tr>";
        echo "<tr>";
        echo "<td>$this->titre</td>";
        echo "<td>$this->destination</td>";
        echo "<td>$this->id</td>";
        echo "<td>$this->prix </td>";
        echo "<td>$this->datedep</td>";
        echo "<td>$this->dateret</td>";
        echo "<td>$this->categorie</td>";
        echo "<td>$this->disponible</td>";
        echo "</tr>";
        echo "</table>";
    }
    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function getDateDepart()
    {
        return $this->datedep;
    }

    public function getDateRetour()
    {
        return $this->dateret;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getDisponible()
    {
        return $this->disponible;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }


}







?>