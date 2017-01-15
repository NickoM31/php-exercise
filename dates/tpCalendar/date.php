<?php 

function calendrier($mois, $annee){
	$nbjour = cal_days_in_month( CAL_GREGORIAN, $mois, $annee);
	var_dump($nbjour);
}
?>
