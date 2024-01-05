<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Location</title>
</head>

<body>
<?php include "nav.php" ?>
<div>
    <h1>
        Add new location
    </h1>
         <form action="/php_scripts/add_location_db.php" method="post">
             
            <p>
               <label for="street_number">Street Number:</label>
               <input type="text" name="street_number" id="street_number" >
            </p>
             
            <p>
               <label for="street_name">Street Name:</label>
               <input type="text" name="street_name" id="street_name" >
            </p>
 
            <p>
               <label for="city">City:</label>
               <input type="text" name="city" id="city">
            </p>
            
            <p>
               <label for="state">State:</label>
               <input type="text" name="state" id="state" >
            </p>
            
            <p>
               <label for="country">Country:</label>
               <input type="text" name="country" id="country">
            </p>

            <p>
               <label for="post_code">Post Code:</label>
               <input type="text" name="post_code" id="post_code">
            </p>
 
            <input type="submit" value="Submit">
         </form>
</div>
</body>