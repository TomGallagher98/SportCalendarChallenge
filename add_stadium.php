<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Add Stadium</title>
</head>

<body>
   <?php include "nav.php" ?>
   <main> 
      <div class="left">
         <h1>
            Add new stadium
         </h1>
               <form action="/php_scripts/add_stadium_db.php" method="post">
                  
                  <p>
                     <label for="display_name">Name:</label>
                     <input type="text" name="display_name" id="display_name" >
                  </p>
                  
                  <p>
                     <label for="base_name">Base Name:</label>
                     <input type="text" name="base_name" id="base_name" >
                  </p>
                  
                  <p>
                     <label for="location">Location:</label>
                     <input type="number" name="location" id="location" >
                  </p>
      
                  <input type="submit" value="Submit">
               </form>
      </div>
      <div class="right">
         <?php include "data_lookup.php" ?>
      </div>
   </main>
</body>