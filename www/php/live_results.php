<?php
if ( !isset($SERVER_ROOT) ) $SERVER_ROOT = '../../../';
require_once ($SERVER_ROOT . 'includes/php/mysql_connect_staging.php');
#require_once ('../../../../includes/php/mysql_connect_production.php');

function admin_table_dump($year, $team)
{
	$table = 'kd_' . $team;
	$query = 'select name, keep, dump from ' . $table . ' WHERE year = ' . $year;
	$result = @mysql_query($query);
	$slug = $team . '-' . $year; 
	echo '<h2 id="' . $slug . '"><a class="anchor" href="#' . $slug . '" aria-hidden="true"><svg aria-hidden="true" class="intra intralink" height="16" version="1.1" viewBox="10 10 66 66" width="16"><path fill="#000000" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 23.4963,46.1288L 25.0796,48.8712L 29.4053,50.0303L 33.519,47.6553L 34.8902,46.8636L 37.6326,45.2803L 38.4242,46.6515L 37.2652,50.9772L 30.4091,54.9356L 21.7577,52.6174L 18.591,47.1326L 20.9091,38.4811L 27.7652,34.5227L 32.0909,35.6818L 32.8826,37.053L 30.1402,38.6364L 28.769,39.428L 24.6553,41.803L 23.4963,46.1288 Z M 38.7348,28.1895L 45.5908,24.2311L 54.2423,26.5493L 57.409,32.0341L 55.0908,40.6856L 48.2348,44.6439L 43.9091,43.4848L 43.1174,42.1136L 45.8598,40.5303L 47.231,39.7386L 51.3446,37.3636L 52.5037,33.0379L 50.9204,30.2955L 46.5946,29.1364L 42.481,31.5114L 41.1098,32.3031L 38.3674,33.8864L 37.5757,32.5152L 38.7348,28.1895 Z M 33.9006,45.1496L 31.7377,44.5701L 30.5502,42.5133L 31.1298,40.3504L 42.0994,34.0171L 44.2623,34.5966L 45.4498,36.6534L 44.8702,38.8163L 33.9006,45.1496 Z"></path></svg></a>' . ucfirst($team) . ' ' . $year . '</h2>' . "\n";
	echo '<table border="1" id="' . $slug . '-table">' . "\n";
	echo '<col><col><col><col><col><col><col><col>' . "\n";
	echo '<thead><tr><th>PLAYER</th><th>KEEP</th><th>DUMP</th><th>Dump %</th><th>TOTAL</th></tr></thead><tbody>' . "\n";

	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
		$total = intval($row["keep"]) + intval($row["dump"]);
		$dump_percent = round(intval($row["dump"]) / $total, 2);
		echo "<tr><td>".$row['name']."</td><td>".$row["keep"]."</td><td>".$row["dump"]."</td><td>" . $dump_percent . "</td><td>" . $total . "</td></tr>";
	}
	$query2 = 'SELECT sum(keep) as kt, sum(dump) as dt FROM ' . $table . ' WHERE year = ' . $year;
	$result2 = @mysql_query($query2);
	$row2 = mysql_fetch_array($result2, MYSQL_ASSOC);
	$total = intval($row2["kt"]) + intval($row2["dt"]);
	$dump_percent = round(intval($row2["dt"]) / $total, 2);
	echo "\n<tr class='grand'><td>GRAND TOTAL</td><td>".$row2["kt"]."</td><td>".$row2["dt"]."</td><td>" . $dump_percent . "</td><td>" . $total . "</td></tr>\n";
	echo '</table>';
	echo "\n" . '<script>$("#' . $slug . '-table").tablesorter();</script>';
}
?>
<html>
<head>

<title>Every Page Needs a Title, Even This One</title>
<script src="http://interactive.nydailynews.com/poll/keep-em-dump-em/js/vendor/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.23.5/js/jquery.tablesorter.js"></script>
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
table tr.grand {
	background-color:  #fbb;
}
table  th {
    color: white;
    background-color: black;
}
h1, th { text-transform: uppercase; }
  
svg.intralink {
    height: 28px;
    width: 28px;
    position: relative;
    top: 10px;
    margin-left: -5px;
    left: 5px;
}
svg.intralink path { fill: #aaa; }
  </style>
</head>
<body>

<h1>Keep 'Em Dump 'Em results</h1>

<?php
$year = 2017;
$team = 'rangers';
admin_table_dump($year, $team);

$year = 2017;
$team = 'knicks';
admin_table_dump($year, $team);
?>

</body>
</html>
