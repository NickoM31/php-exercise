<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice6</title>
</head>
<body>
	<h1>Les Dates : cal_days_in_month </h1>

	<?php
		// setlocale (LC_TIME, 'fr_FR.utf8','fra');
		$dayInFeb = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
		echo "Le nombre de jour au mois de février 2016 est de" ." ".($dayInFeb).".";

	 ?>
</body>
</html>