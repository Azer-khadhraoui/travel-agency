<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form</title>
  <script src="addOffer.js"></script>
</head>

<body>
  <h1>Add a Travel Offer</h1>

  <form id="travelOfferForm" action="Verification.php" method="POST">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" minlength="3" required />
    <br />
    <label for="destination">Destination:</label>
    <input type="text" name="destination" id="destination" minlength="3" pattern="[A-Za-z\s]+" />
    <br />
    <label for="Departure">Departure Date:</label>
    <input type="date" name="Departure" id="Departure" />
    <br />
    <label for="Return">Return Date:</label>
    <input type="date" name="Return" id="Return" />
    <br />
    <label for="price">Price:</label>
    <input type="number" name="price" id="price" min="0" />
    <br />
    <label for="Availability">Availability:</label>
    <input type="checkbox" name="Availability" id="Availability" />
    <br />
    <label for="Category">Category</label>
    <select name="Category" id="Category">
      <option value="ad">Adventure</option>
      <option value="ac">Action</option>
      <option value="hs">History</option>
      <option value="wt">WorldTour</option>
    </select>
    <br />

    <button type="submit" onClick="validerFormulaire()">Add Offer</button>
  </form>
<?php
  $titre = $_POST['title'];
$destination = $_POST['destination'];
$datedep = $_POST['departuredate'];
$dateret = $_POST['returndate'];
$price = $_POST['price'];
$disponible = isset($_POST['availability']) ? "Available" : "Not available";
$categorie = $_POST['category'];


$offre1 = new traveloffer("x8",$titre, $destination ,$price,$datedep,$dateret,$disponible,$categorie);


echo "<h2>Affichage avec var_dump:</h2>";
var_dump($offre1);


$controller = new TravelOfferController();


echo "<h2>Affichage avec showTravelOffer:</h2>";
$controller->showTravelOffer($offre1);
</body>

</html>