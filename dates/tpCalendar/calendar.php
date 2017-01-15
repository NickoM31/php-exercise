<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calendar</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Calendrier</h1>
	
	<table>
		<tr>
			<td>

			</td>
		</tr>
	</table>
		<form method="post" action="calendar.php">
			<select name="mois" id="mois">
				
			</select>
			<select name="annee" id="annee">
				
			</select>
		</form>
	</div>
	
	<?php 

	require'date.php';
	var_dump($nbjour);
	?>

</body>
</html>