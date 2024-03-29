<?php require "php_scripts/get_entries.php"; ?>
<?php require "php_scripts/filter_sports.php"; ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/styles.css">
    <title>Calendar</title>
</head>

<body>

<?php include "nav.php" ?>

    <header>
        <h1> Sports Calendar </h1>
    </header>

    <main>
        <div class="left">
            <div class="filter">
                <p>Select Dataset</p>
                <?php $sports = getSports(); ?>
                    <form method="POST">
                    <select name="sports" id="id_sports">
                        <option></option>
                        <?php 
                        foreach ($sports as $sport) {
                            ?>
                            <option><?php echo $sport['Sport'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input name="submit" type="submit" value="Search"/>
                </form>
            </div>

            <div class="Main-table">

                <?php 
                    $choice = isset($_POST['sports'])? $_POST['sports'] :''; 
                    $entries = getEntries($choice); 
                ?>
                    
                <table border="1">
                    <tr>
                        <th>Day</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Sport</th>
                        <th>Teams</th>
                    </tr>
                    <?php 
                    foreach ($entries as $entry) { 
                        ?>
                        <tr>
                            <td><?php echo date('l', strtotime($entry['Event_Date'])) ?></td>
                            <td><?php echo $entry['Event_Date'] ?> </td>
                            <td><?php echo $entry['Event_Time'] ?></td>
                            <td><?php echo $entry['Sport'] ?></td>
                            <td><?php echo $entry['Home']?> - <?php echo $entry['Away']?></td>
                        </tr>
                    <?php
                    }
                ?>
                </table>
            </div>
        </div>
    </main>
</body>