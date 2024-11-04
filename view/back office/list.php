<?php
/*include '../../Controller/traveloffercontroller.php';

$offer1 = new TravelOfferController();
//$list = $offer1->listOffre();
$list = $offer1->addOffre($offer1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Offers</title>
</head>
<body>
<p id="res"></p>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Destination</th>
            <th>Departure date</th>
            <th>Return date</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Category</th>
        </tr>
        <?php
        foreach ($list as $offer) {
        ?>
        
        
        <tr>
            <td><?= $offer['id']; ?></td>
            <td><?= $offer['titre']; ?></td>
            <td><?= $offer['destination']; ?></td>
            <td><?= $offer['departure_date']; ?></td>
            <td><?= $offer['return_date']; ?></td>
            <td><?= $offer['price']; ?></td>
            <td><?= $offer['disponible']; ?></td>
            <td><?= $offer['categorie']; ?></td>
        </tr>
        
        <?php
        echo $offer['titre'];
        }
        ?>
    </table>
</body>
</html>*/




include "../../Controller/TravelOfferController.php";
$travelController = new TravelOfferController();
$list = $travelController->listOffre();

echo "<table border='1'>
        <tr>
        <th>id</th>
            <th>Title</th>
            <th>Destination</th>
            <th>Departure Date</th>
            <th>Return Date</th>
            <th>Price</th>
            <th>Disponibility</th>
            <th>Category</th>
        </tr>";

foreach ($list as $row) {
    $id = $row['id'];
    $titre = $row['titre'];
    $destination = $row['destination'];
    $departure_date = $row['departure_date'];
    $return_date = $row['return_date'];
    $price = $row['price'];
    $disponible = $row['disponible'];
    $categorie = $row['categorie'];

    echo "<tr>
            <td>{$id}</td>
    <td>{$titre}</td>
            <td>{$destination}</td>
            <td>{$departure_date}</td>
            <td>{$return_date}</td>
            <td>{$price}</td>
            <td>{$disponible}</td>
            <td>{$categorie}</td>
            <td>
        <a href='delete.php?id={$id}' onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette offre ?');\">Supprimer</a>
      </td>;

          </tr>";
}
echo "</table>";
?>