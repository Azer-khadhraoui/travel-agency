<?php
include '../../Controller/traveloffercontroller.php';

// Vérifie si l'ID est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Vérifie que l'ID est valide
    if (!filter_var($id, FILTER_VALIDATE_INT)) {
        die("ID invalide.");
    }

    $controller = new TravelOfferController();
    $controller->deleteOffer($id); // Suppression par ID

    header("Location: list.php"); // Redirige vers la liste après suppression
    exit();
} else {
    die("Aucun ID fourni pour la suppression.");
}
?>
