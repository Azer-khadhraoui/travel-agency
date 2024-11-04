<?php
include 'addtraveloffer.php';
include '../../Controller/traveloffercontroller.php';
$titre = $_POST['title'];
$destination = $_POST['destination'];
$datedep = $_POST['departuredate'];
$dateret = $_POST['returndate'];
$price = $_POST['price'];
$disponible = isset($_POST['availability']) ? "Available" : "Not available";
$categorie = $_POST['category'];
$offre1 = new traveloffer("x8",$titre, $destination ,$price,$datedep,$dateret,$disponible,$categorie);
/*echo "<h2>Affichage avec var_dump:</h2>";
var_dump($offre1);
*/
$controller = new TravelOfferController();
/*echo "<h2>Affichage avec showTravelOffer:</h2>";*/
$controller->addOffer($offre1);


/*if (isset($_GET['id'])) {
    $titre = $_GET['id'];
    $controller = new TravelOfferController();
    $controller->deleteOffer($id);
   
}*/

?>
