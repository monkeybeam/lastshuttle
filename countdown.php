<?php
	include "nowSLT.php";
	$now_date = $todaySLT;
	$end_date = mktime(11,40,00,07,8,2011) + 0;  
	
	//echo "SLT Date: ".$now_date;
	//echo "<br />";
	//echo "Launch Date: ".$end_date;
	//echo "<br />";
	$datediff = $end_date - $now_date;
 	//echo "<br />";
	//echo "Time Left in Total Seconds: ".$datediff;

	$countdown_days		=	floor($datediff/86400);   //as there are 86400 seconds in one day
	$countdown_hours        =	floor(($datediff - ($countdown_days * 86400)) / 3600);  //as there are 3600 seconds per hour
	$countdown_minutes	=	floor(($datediff - ($countdown_days * 86400) - ($countdown_hours * 3600)) / 60);  //as there are 60 seconds per minute 
	//$countdown_hours	=	$interval->format('%h');
	//$countdown_minutes	=	$interval->format('%s');

	
	//$datetime1 = date('d-M-Y H:i:s', ($now_date));
	//$datetime2 = date('d-M-Y H:i:s', ($end_date));
	//$interval = $datetime2 - $datetime1;
	
	//echo "<br />".$interval;
	
	//$countdown_months	=	$interval->format('%m');
	//$countdown_days		=	$interval->format('%d');
	//$countdown_hours	=	$interval->format('%h');
	//$countdown_minutes	=	$interval->format('%s');
?>