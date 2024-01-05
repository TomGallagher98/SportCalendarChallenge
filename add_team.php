<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Team</title>
</head>

<body>
<?php include "nav.php" ?>
<div>
    <h1>
        Add new team
    </h1>
         <form action="/php_scripts/add_team_db.php" method="post">
             
            <p>
               <label for="display_name">Display Name:</label>
               <input type="text" name="display_name" id="display_name" >
            </p>
             
            <p>
               <label for="full_name">Full Name:</label>
               <input type="text" name="full_name" id="full_name" >
            </p>
 
            <p>
               <label for="city">City:</label>
               <input type="text" name="city" id="city">
            </p>
            
            <p>
               <label for="location">Home Location:</label>
               <input type="number" name="location" id="location" placeholder="Add Location ID>
            </p>
            
            <p>
               <label for="stadium">Home Stadium:</label>
               <input type="number" name="stadium" id="stadium" placeholder="Add Stadium ID>
            </p>

            <p>
               <label for="contact">Contact:</label>
               <input type="text" name="contact" id="contact">
            </p>

            <p>
               <label for="sport">Sport:</label>
               <input type="text" name="sport" id="sport">
            </p>
 
            <input type="submit" value="Submit">
         </form>
</div>
</body>