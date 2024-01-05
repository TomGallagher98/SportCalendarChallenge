<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <title>Add Team</title>
</head>

<body>
<?php include "nav.php" ?>
<div>
    <h1>
        Add new event
    </h1>
         <form action="/php_scripts/add_team_db.php" method="post">
             
            <p>
               <label for="display_name">Dispaly Name:</label>
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
               <input type="text" name="location" id="location" >
            </p>
            
            <p>
               <label for="stadium">Home Stadium:</label>
               <input type="text" name="stadium" id="stadium">
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