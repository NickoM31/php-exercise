<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 7</title>
</head>
<body>
	<h1>Les Dates</h1>
<?php 
setlocale (LC_TIME, 'fr_FR.utf8','fra');
$convertTime = "%A %d %B %Y";
$today = time('UTC');
$todayConvert = strftime($convertTime, $today);
$upDay = mktime(0, 0, 0, date("m")  , date("d")+20, date("Y"));;
$upDayConvert = strftime($convertTime, $upDay);
echo "Nous sommes le" ." ".$todayConvert ." et si nous rajoutons 20 jours nous seront le" ." ". $upDayConvert .".";
 ?>


</body>
</html>