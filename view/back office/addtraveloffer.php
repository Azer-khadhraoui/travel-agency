<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Travel Offer</title>
</head>
<body align="center">
    <h1 align="center">Add a Travel Offer</h1>
    <form id="form" action="verification.php" method="POST">
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" required>
        <p id="ti"></p>
        <br><br>
        
        <label for="destination">Destination: </label>
        <input type="text" id="destination" name="destination">
        <p id="dest"></p>
        <br><br>
        
        <label for="departuredate">Departure Date: </label>
        <input type="date" id="departuredate" name="departuredate" required>
        <p id="dt"></p>
        <br><br>
        
        <label for="returndate">Return Date: </label>
        <input type="date" id="returndate" name="returndate" required>
        <p id="dt"></p>
        <br><br>
        
        <label for="price">Price: </label>
        <input type="number" id="price" name="price" required>
        <p id="prix"></p>
        <br><br>
        
        <label>
            Availability:
            <input type="checkbox" name="availability" value="">
        </label>
        <br><br>
        
        <label for="category">Category:</label>
        <select name="category">
            <option value="adv">Adventure</option>
            <option value="f">Family</option>
            <option value="co">Couple</option>
        </select>
        <br><br>
        
        <input type="submit" value="Add Offer" id="but">
    </form>

    <script>
        var form = document.getElementById("form");
        var ti = document.getElementById("ti");
        var dest = document.getElementById("dest");
        var prix = document.getElementById("prix");
        var dt = document.getElementById("dt");

        form.addEventListener("submit", function(e) {
            let isValid = true;

            
            var title = document.getElementById("title").value;
            ti.innerText = "";
            if (title.length < 3) {
                ti.innerText = "Le titre doit contenir au moins 3 caractères.";
                ti.style.color = "red";
                isValid = false; 
            } else {
                ti.innerText = "correct";
                ti.style.color = "green";
            }

           
            var destination = document.getElementById("destination").value;
            dest.innerText = "";
            if (destination.length < 3) {
                dest.innerText = "La destination doit contenir au moins 3 caractères.";
                dest.style.color = "red";
                isValid = false; 
            } else {
                dest.innerText = "correct";
                dest.style.color = "green";
            }

            
            for (let i = 0; i < destination.length; i++) {
                let char = destination[i];
                if (!((char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z') || char === ' ')) {
                    dest.innerText = "La destination doit contenir uniquement des lettres et des espaces.";
                    dest.style.color = "red";
                    isValid = false; 
                    break;
                }
            }

            
            var price = document.getElementById("price").value;
            prix.innerText = "";
            if (price < 0) {
                prix.innerText = "Prix doit être positif";
                prix.style.color = "red";
                isValid = false; 
            } else {
                prix.innerText = "correct";
                prix.style.color = "green";
            }

            
            var departureDate = document.getElementById("departuredate").value;
            var returnDate = document.getElementById("returndate").value;
            dt.innerText = "";
            if (returnDate <= departureDate) {
                dt.innerText = "La date de retour doit être ultérieure à la date de départ.";
                dt.style.color = "red";
                isValid = false; 
            } else {
                dt.innerText = "correct";
                dt.style.color = "green";
            }

            
            if (!isValid) {
                e.preventDefault(); 
            }
        });
    </script>
</body>
</html>
