<?php require "php_scripts/get_entries.php"; ?>
<?php require "php_scripts/filter_sports.php"; ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <title>Calendar</title>
</head>

<body>
    <header>
        <h1> Sports Calendar </h1>
        <p class="subtitle">
            Choose between Calendar and List display
        </p>
    </header>

    <main>
        <div class="Main-table">
        <?php $entries = getEntries(); ?>
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
                    
                    <td>Sat.</td>
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
    
        <div class="filter">
        <?php $sports = getSports(); ?>
            <form action="php_scripts/filter_sports.php">
                <label for="Sports">Select sport</label>
                <select name="sports" id="sports">
                    <option></option>
                    <?php 
                    foreach ($sports as $sport) {
                        ?>
                        <option><?php echo $sport['Sport'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </form>
        </div>
    </main>
</body>