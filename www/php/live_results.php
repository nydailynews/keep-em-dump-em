<html>
<head>


<style type="text/css">
  body{
    font-family: sans-serif;
  }
  table, th, td {
    border: 1px solid #ddd;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}

table { width: 100%; }
table tr:nth-child(even) {
    background-color: #eee;
}
table  tr:nth-child(odd) {
    background-color: #fff;
}
table  th {
    color: white;
    background-color: black;
}
h1 { text-transform: uppercase; }
  
  </style>
</head>
<body>

<h1>Keep 'Em Dump 'Em results</h1>

<h2>Knicks 2017</h2>
<?php
if ( !isset($SERVER_ROOT) ) $SERVER_ROOT = '../../../';
require_once ($SERVER_ROOT . 'includes/php/mysql_connect_staging.php');
#require_once ('../../../../includes/php/mysql_connect_production.php');
$year = 2017;
$team = 'knicks';
$table = 'kd_' . $team;

$query = 'select name, keep, dump from ' . $table . ' WHERE year = ' . $year;
$result = @mysql_query($query);
echo '<table border="1">';
echo '<tr><td>PLAYER</td><td>KEEP</td><td>DUMP</td><td>TOTAL</td></tr>';

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	$total = intval($row["keep"]) + intval($row["dump"]);
	echo "<tr><td>".$row['name']."</td><td>".$row["keep"]."</td><td>".$row["dump"]."</td><td>" . $total . "</td></tr>";
}
$query2 = 'SELECT sum(keep) as kt, sum(dump) as dt FROM ' . $table . ' WHERE year = ' . $year;
$result2 = @mysql_query($query2);
$row2 = mysql_fetch_array($result2, MYSQL_ASSOC);
$total = intval($row2["kt"]) + intval($row2["dt"]);
echo "<tr><td>GRAND TOTAL</td><td>".$row2["kt"]."</td><td>".$row2["dt"]."</td><td>" . $total . "</td></tr>";
echo '</table>';

?>


</body>
</html>
