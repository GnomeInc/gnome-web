<html>
<head>
    <meta charset="utf-8" />
    <title>Gnome Inc.</title>
<?php
/**
 * Agriduino Web Interface Root Page
 * V 0.1
 * User: eric
 * Date: 1/30/16
 * Time: 3:38 PM
 */
include 'vendor/autoload.php';
use League\Csv\Reader;
$csv = Reader::createFromPath('agri_data.csv');
?>
    <link href="css/table.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Welcome to GnomeInc&reg</h1>

<table id="data_table" cellspacing="0" summary="Condition data for gnome garden">
    <caption>Your Gnome Data</caption>
<?php

$data = $csv->fetchAll();
$header = $data[0];
echo "<thead><tr>";
foreach($header as $h){
    echo "<th>";
    echo $h;
    echo "</th>";
}
echo "</tr></thead>";
$i = 1;
while($row= $csv->fetchOne($i)){
    echo("<tr>");
    foreach($row as $d){
        echo "<td>";
        echo $d;
        echo "</td>";
    }
    echo("</tr>");
    $i++;
}
?>
</table>
</body>
</html>