<?php require 'php_scripts/data_lookup_db.php'?>

<div class="table_names">
    <p>Select Dataset</p>

    <form method="POST">
        <select name="datasets" id="id_datasets">
            <option>Teams</option>
            <option>Stadiums</option>
            <option>Locations</option>
        </select>
        <input name="submit" type="submit" value="Search"/>
    </form>

    <div class="data_selector">
        <?php 
            $choice = isset($_POST['datasets'])? $_POST['datasets'] : 'Teams'; 
            echo $choice;
            $entries = getDataSet($choice); 

            $keys = array_keys($entries[0]);
        ?> 
        <table border="1">
            <tr>
            <?php
            for ($i = 0; $i < count($keys); $i++) {
                ?>
                    <th><?php echo $keys[$i]?></th>
                <?php
            }
            ?>
            </tr>
                <?php
                    foreach ($entries as $entry) { 
                        $temp = array_values($entry); 
                ?>
                    <tr> 
                        <?php for ($i = 0; $i < count($keys); $i++) { ?> 
                            <td><?php echo $temp[$i] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
                    }
                ?>
        </table>
    </div>
</div>