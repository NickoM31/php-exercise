<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 8</title>
</head>
<body>
	<h1>Les Dates</h1>
	<?php 
setlocale(LC_TIME, 'fr_FR.utf8','fra');
$convertTime = "%A %d %B %Y";
$today = time('UTC');
$todayConvert = strftime($convertTime, $today);
$downDay = mktime(0, 0, 0, date("m")  , date("d")-22, date("Y"));;
$downDayConvert = strftime($convertTime, $downDay);
echo "Nous sommes le" ." ".$todayConvert ." et si nous enlevons 22 jours nous étions le" ." ". $downDayConvert .".";

	 ?>
</body>
</html>