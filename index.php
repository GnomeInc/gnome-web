<?php
/**
 * Agriduino Web Interface Root Page
 * V 0.1
 * User: eric
 * Date: 1/30/16
 * Time: 3:38 PM
 */

use League\Csv\Reader;


echo "<h1>Welcome to GnomeInc&reg</h1>";

$reader = Reader::createFromPath('var/www/agri_data.csv');
foreach ($reader as $index => $row) {
    foreach($row as $j => $data){
        echo "$data";
    }
}